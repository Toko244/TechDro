<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Component;
use App\Models\ComponentPost;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\PostTranslation;
use Illuminate\Support\Facades\File;
use App\Models\Section;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slug;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Repositories\Interfaces\SlugRepositoryInterface;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use UploadImageTrait;

    public function __construct(
        private PostRepositoryInterface $postRepository,
        private SectionRepositoryInterface $sectionRepository,
        private SlugRepositoryInterface $slugRepository
    ) {
    }
    public function index($sec = null)
    {
        $section = Section::find($sec);
        if (isset($section->type) && in_array($section->type['type'], [2, 8])) {
            $post = Post::where('section_id', $sec)->with(['translations', 'slugs'])->first();

            return $post
                ? redirect()->route('post.edit', [app()->getLocale(), $post->id])
                : redirect()->route('post.create', [app()->getLocale(), $sec, 'section_id' => $sec]);
        }

        $posts = Post::query()
            ->where('section_id', $sec)
            ->orderBy('created_at', 'desc')
            ->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
            ->where('post_translations.locale', app()->getLocale())
            ->select(
                'posts.*',
                'post_translations.text',
                'post_translations.desc',
                'post_translations.title',
                'post_translations.locale_additional'
            )
            ->with(['translations'])
            ->paginate(settings('Paginate'));

        return view('admin.posts.list', compact('section', 'posts'));
    }


    public function create($id, Request $request)
    {
        $path = explode("/", $request->path());

        if (isset($path['2']) && $path['2'] == 'section') {
            $section = Section::find($id);
            return view('admin.posts.add', compact('section'));
        }
        if (isset($path['2']) && $path['2'] == 'component') {

            $component = Component::find($id);
            return view('admin.posts.add', compact('component'));
        }
    }

    public function store($sec, StorePostRequest $request)
    {
        $data = $request->all();
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
// dd($data);
        $section = Section::where('id', $sec)->first();
        // Handle Post Slugs ------
        if ($data['type'] == 'sectionTypes') {
            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }

            $data['additional'] = getAdditional($data, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
            foreach (config('app.locales') as $locale) {
                if (isset($data[$locale]['file']) && $data[$locale]['file'] != '') {
                    $newfileName = uniqid() . "." . $data[$locale]['file']->getClientOriginalExtension();
                    $orignalName = $data[$locale]['file']->getClientoriginalname();
                    $data[$locale]['file']->move(config('config.file_path'), $newfileName);
                    $data[$locale]['file'] = '';
                    $data[$locale]['file'] = $newfileName;
                    $data[$locale]['filename'] = $orignalName;
                }

                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }

            $post = $this->postRepository->createPost($data);
            foreach (config('app.locales') as $locale) {
                $post->slugs()->create([
                    'fullSlug' => $data[$locale]['slug'],
                    'slug' => $data[$locale]['slug'],
                    'locale' => $locale,
                ]);
            }
            // dd($post);
            if (isset($request['files']) && count($request['files']) > 0) {
                foreach ($request['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $request['files'][$key]['title'][$k];
                        $postFile->file_additional = collect([
                            'ka' => $request['files'][$key]['alt_text']['ka'][$k],
                            'en' => $request['files'][$key]['alt_text']['en'][$k],
                        ]);
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }
            $post = $post->load('files', 'slugs', 'author');
            return redirect()->route('post.list', [app()->getLocale(), $section->id]);
        } elseif ($data['type'] == 'componentTypes') {

            $component = Component::where('id', $data['component_id'])->first();
            // dd($component);
            if (isset($data['icon']) && ($data['icon'] != '')) {
                $newiconName = uniqid() . '.' . $data['icon']->getClientOriginalExtension();
                $data['icon']->move(config('config.file_path'), $newiconName);
                $data['icon'] = '';
                $data['icon'] = $newiconName;
            } elseif (isset($data['old_icon'])) {
                $data['icon'] = $data['old_icon'];
            }
            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }

            $data['additional'] = getAdditional($data, array_diff(array_keys($component->fields['nonTrans']), $postFillable));
            foreach (config('app.locales') as $locale) {
                if (isset($data[$locale]['file']) && $data[$locale]['file'] != '') {
                    $newfileName = uniqid() . "." . $data[$locale]['file']->getClientOriginalExtension();
                    $orignalName = $data[$locale]['file']->getClientoriginalname();
                    $data[$locale]['file']->move(config('config.file_path'), $newfileName);
                    $data[$locale]['file'] = '';
                    $data[$locale]['file'] = $newfileName;
                    $data[$locale]['filename'] = $orignalName;
                }
                if (isset($data[$locale]['files']['images']) && count($data[$locale]['files']['images']) > 0) {
                    $images = [];
                    foreach ($data[$locale]['files']['images'] as $index => $image) {
                        $file_name = $image->getClientOriginalName();
                        $image_id = $index; // Generate a unique ID for the image
                        $image->move(config('config.image_path') . config('config.thumb_path'), $file_name);
                        $images[$image_id] = [
                            'id' => $image_id,
                            'file_name' => $file_name,
                        ];
                    }
                    $data[$locale]['files']['images'] = $images;
                }

                if (isset($data[$locale]['image']) && ($data[$locale]['image'] != '')) {
                    $newfileName = uniqid() . '.' . $data[$locale]['image']->getClientOriginalExtension();
                    $orignalName = $data[$locale]['image']->getClientOriginalName();
                    $data[$locale]['image']->move(config('config.image_path') . config('config.thumb_path'), $newfileName);
                    $data[$locale]['image'] = $newfileName;
                    $data[$locale]['filename'] = $orignalName;
                }
                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($component->fields['trans']), $postTransFillable));
            }

            $post = $this->postRepository->createPost($data);
            $this->postRepository->addConnectedPosts($data, $post->id);
            if (isset($request['files']) && count($request['files']) > 0) {
                foreach ($request['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $request['files'][$key]['title'][$k];
                        $postFile->file_additional = collect([
                            'ka' => $request['files'][$key]['alt_text']['ka'][$k],
                            'en' => $request['files'][$key]['alt_text']['en'][$k],
                        ]);
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }

            $post = $post->load('files', 'slugs', 'author');

            return redirect()->route('componentPosts.index', ['locale' => app()->getLocale(), 'component_id' => $data['component_id']]);
        }
    }

    public function edit($id)
    {
        $post = $this->postRepository->getPostById($id);
        $section = $post['section'];
        $slug = Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->pluck('slug', 'locale');
        $componentpost = ComponentPost::where('post_id', $post->id)->first();
        if ($componentpost !== null) {
            $component = Component::where('id', $componentpost->component_id)->with('translations')->first();
        } else {
            $component = null;
        }
        return view('admin.posts.edit', compact('section', 'component', 'post', 'slug'));
    }


    public function update($id, UpdatePostRequest $request)
    {
        $data = $request->all();

        Post::find($id)->slugs()->delete();

        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
        $post = Post::find($id);

        $componentpost = ComponentPost::where('post_id', $post->id)->first();
        if ($componentpost !== null) {
            $component = Component::where('id', $componentpost->component_id)->with('translations')->first();
        } else {
            $component = null;
        }

        $section = Section::where('id', $post->section_id)->with('translations')->first();

        if ($data['type'] == 'sectionTypes') {
            $data['additional'] = getAdditional($data, array_diff(array_keys($section->fields['nonTrans']), $postFillable));

            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }
            $slugs = $this->slugRepository->initiateMany($request->validated());

            foreach (config('app.locales') as $locale) {

                if (isset($data[$locale]['files']['images']) && count($data[$locale]['files']['images']) != '') {
                    $images = [];
                    foreach ($data[$locale]['files']['images'] as $index => $image) {
                        $file_name = $image->getClientOriginalName();
                        $image_id = $index; // Generate a unique ID for the image
                        $image->move(config('config.image_path') . config('config.thumb_path'), $file_name);
                        $images[$image_id] = [
                            'id' => $image_id,
                            'file_name' => $file_name,
                        ];
                    }
                    $data[$locale]['files']['images'] = $images;
                }

                if (isset($data[$locale]['image']) && ($data[$locale]['image'] != '')) {

                    $newfileName = uniqid() . '.' . $data[$locale]['image']->getClientOriginalExtension();
                    $orignalName = $data[$locale]['image']->getClientOriginalName();
                    $data[$locale]['image']->move(config('config.image_path'), $newfileName);
                    $data[$locale]['image'] = $newfileName;
                    $data[$locale]['filename'] = $orignalName;
                }
                if (isset($data[$locale]['file']) && ($data[$locale]['file'] != '')) {
                    $newfileName = uniqid() . '.' . $data[$locale]['file']->getClientOriginalExtension();
                    $data[$locale]['file']->move(config('config.file_path'), $newfileName);
                    $data[$locale]['file'] = '';
                    $data[$locale]['file'] = $newfileName;
                } elseif (isset($data[$locale]['old_file'])) {
                    $data[$locale]['file'] = $data[$locale]['old_file'];
                }
                $post->slugs()->updateOrCreate(['locale' => $locale], ['slug' => $slugs[$locale]['slug'], 'fullSlug' => $slugs[$locale]['fullSlug']]);
                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }
            $allOldFiles = PostFile::where('post_id', $post->id)->get();
            foreach ($allOldFiles as $key => $fil) {
                if (isset($data['old_file']) && count($data['old_file']) > 0) {
                    if (!in_array($fil->id, array_keys($data['old_file']))) {
                        $fil->delete();
                    }
                } else {
                    $fil->delete();
                }
            }
            if (isset($request['files']) && count($request['files']) > 0) {
                foreach ($request['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $request['files'][$key]['title'][$k];
                        $postFile->file_additional = collect([
                            'ka' => $request['files'][$key]['alt_text']['ka'][$k],
                            'en' => $request['files'][$key]['alt_text']['en'][$k],
                        ]);
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }

            $post = $this->postRepository->updatePost($id, $data);
        }

        if ($data['type'] == 'componentTypes') {
            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }

            $data['additional'] = getAdditional($data, array_diff(array_keys($component->fields['nonTrans']), $postFillable));
            foreach (config('app.locales') as $locale) {

                $existingImages = $post->translate($locale)['files']['images'] ?? [];
                if (isset($data[$locale]['files']['images']) && count($data[$locale]['files']['images']) != '') {
                    foreach ($data[$locale]['files']['images'] as $index => $image) {
                        $file_name = $image->getClientOriginalName();
                        $image_id = $index; // Generate a unique ID for the image
                        $image->move(config('config.image_path') . config('config.thumb_path'), $file_name);

                        // Append new image to existing images
                        $existingImages[] = [
                            'id' => $image_id,
                            'file_name' => $file_name,
                        ];
                    }
                    $data[$locale]['files']['images'] = $existingImages;
                }

                if (isset($data[$locale]['image']) && ($data[$locale]['image'] != '')) {
                    $newfileName = uniqid() . '.' . $data[$locale]['image']->getClientOriginalExtension();
                    $orignalName = $data[$locale]['image']->getClientOriginalName();
                    $data[$locale]['image']->move(config('config.image_path') . config('config.thumb_path'), $newfileName);
                    $data[$locale]['image'] = $newfileName;
                    $data[$locale]['filename'] = $orignalName;
                }

                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($component->fields['trans']), $postTransFillable));
            }

            $post = $post->load('files', 'slugs', 'author');

            $allOldFiles = PostFile::where('post_id', $post->id)->get();
            foreach ($allOldFiles as $key => $fil) {
                if (isset($data['old_file']) && count($data['old_file']) > 0) {
                    if (!in_array($fil->id, array_keys($data['old_file']))) {
                        $fil->delete();
                    }
                } else {
                    $fil->delete();
                }
            }
            $post = $this->postRepository->updatePost($id, $data);
            // dd($post);
            if (isset($request['files']) && count($request['files']) > 0) {
                foreach ($request['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $request['files'][$key]['title'][$k];
                        $postFile->file_additional = collect([
                            'ka' => $request['files'][$key]['alt_text']['ka'][$k],
                            'en' => $request['files'][$key]['alt_text']['en'][$k],
                        ]);
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }
        }

        return redirect()->back();
    }

    public function deletefiles(Request $request)
    {
        // dd($request->locale);
        $post = PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->first();
        $publications = collect($post['locale_additional']['publications']);
        $publications->map(function ($item, $index) use ($publications, $request) {
            $publications->forget($request->key);

            return $publications;
        });
        $publications = $publications->toArray();
        PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->update(['locale_additional' => ['publications' => $publications]]);
        $post = PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->first();

        return response()->json(['success' => 'File Deleted']);
    }

    public function destroy($id)
    {

        $post = $this->postRepository->deletePost($id);
        $sec = Section::where('id', $post->section_id)->first();
        return redirect()->route('post.list', [app()->getLocale(), $sec->id]);
    }
    public function deleteImage($id)
    {
        $post = Post::findOrFail($id);

        if ($post->thumb) {
            $imagePath = public_path(config('config.image_path') . config('config.thumb_path') . $post->thumb);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $post->update(['thumb' => null]);
        }

        return response()->json(['success' => 'File Deleted']);
    }
    public function DeleteFile($que)
    {
        $file =  PostTranslation::where('post_id', $que)->first();

        if (file_exists(config('config.file_path') . $file->file)) {
            unlink(config('config.file_path') . $file->file);
        } else {
            dd('File does not exists.');
        }

        if ($file->file != '') {
            $file->file->delete();
            $file->file = '';
        }
        return response()->json(['success' => 'File Deleted']);
    }
    public function deleteImagemulti(Request $request, $postId)
    {
        $data = $request->all();
        $imageId = $data['image_id']; // Use $data to get image_id
        $lang = $data['lang'];

        $post = Post::findOrFail($postId);
        $translation = $post->translate($lang);

        if (isset($translation->files['images'])) {
            $images = $translation->files['images'];
            $index = array_search($imageId, array_column($images, 'id'));

            if ($index !== false) {
                $removedImage = array_splice($images, $index, 1)[0];
                $translation->update(['files' => ['images' => $images]]);
                $imagePath = public_path(config('config.image_path') . config('config.thumb_path') . $removedImage['file_name']);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }

                return response()->json(['message' => 'Image deleted successfully']);
            }
        }

        return response()->json(['message' => 'Image not found'], 404);
    }

    public function deleteImagelang($id)
    {
        $post = Post::findOrFail($id);
        foreach (config('app.locales') as $locale) {
            $translation = $post->translations($locale)->first();
            if (isset($translation)) {
                // Delete image file for this translation
                $imagePath = config('config.image_path') . '/' . $translation->locale_additional['image'];
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
        }
        // Find translation for the specified locale
        $translation->locale_additional['image'] = null;

        $translation->save();

        return response()->json(['success' => true]);
    }

    public function deletepin($id, Request $request)
    {
        $post = Post::findOrFail($id);

        // Get the pin ID from the request
        $pinId = $request->input('pinId');

        // Convert the collection to an array
        $additionalArray = $post->additional->toArray();

        // Check if the "pin" key is present and is an array
        if (isset($additionalArray['pin']) && is_array($additionalArray['pin'])) {
            // Check if the pin with the specified ID exists
            if (isset($additionalArray['pin'][$pinId])) {
                // Remove the pin with the specified ID
                unset($additionalArray['pin'][$pinId]);

                // Convert the modified array back to a collection
                $post->additional = collect($additionalArray);

                // Save the updated Post model
                $post->save();

                return response()->json(['success' => true]);
            }

            return response()->json(['success' => false, 'message' => 'Pin not found']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid additional data']);
    }
    public function fetching(Request $request)
    {
        $sectionId = $request->input('sectionId');

        // Fetch posts based on the sectionId
        $posts = Post::where('section_id', $sectionId)->with('translations')->get();

        return response()->json(['posts' => $posts]);
    }
}
