<?php

namespace App\Repositories;

use App\Models\Componentable;
use App\Models\ComponentPost;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\Slug;
use App\Repositories\Interfaces\ComponentInterfaceRepository;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\File;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(private SectionRepositoryInterface $sectionRepository, private ComponentInterfaceRepository $componentRepository)
    {
    }

    use FileUploadTrait;

    public function getAllPosts($filters)
    {
        $posts = Post::filter($filters)
            ->with('translations', 'files', 'slugs', 'author')
            ->orderBy('updated_at', 'desc')
            ->paginate(config('settings.website_pagination'));

        return $posts;
    }

    public function getPostById($id)
    {
        $post = Post::find($id);

        return $post;
    }

    public function createPost(array $attributes)
    {

        $attributes['author_id'] = auth()->user()->id;

        return Post::create($attributes);
    }

    public function addConnectedPosts(array $data, $id)
    {

        $componentPost = new ComponentPost();
        $componentPost->post_id = $id;
        $componentPost->component_id = $data['component_id'];
        $componentPost->data_type = $data['data_type'];
        $componentPost->save();

        return $componentPost;
    }

    public function updatePost($id, array $attributes)
    {
        $post = Post::findOrFail($id);

        $attributes['author_id'] = auth()->user()->id;

        $post->update($attributes);

        return $post->refresh();
    }

    public function deletePost($id)
    {
        $post = Post::where('id', $id)->first();

        if ($post->thumb) {
            $imagePath = public_path(config('config.image_path') . config('config.thumb_path') . $post->thumb);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $post->update(['thumb' => null]);
        };

        if (isset($post->image)) {
            if (File::exists(config('config.file_path') . $post->image)) {
                File::delete(config('config.file_path') . $post->image);
            }
        }
        $files = PostFile::where('post_id', $post->id)->get();
        foreach ($files as $file) {
            if (File::exists(config('config.image_path') . $file->file)) {
                File::delete(config('config.image_path') . $file->file);
            }
            if (File::exists(config('config.image_path') . 'thumb/' . $file->file)) {
                File::delete(config('config.image_path') . 'thumb/' . $file->file);
            }
            $file->delete();
        }
        Componentable::where('componentable_id', $post->id)->where('componentable_type', 'App\Models\Post')->delete();
        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();

        $post->delete();

        return $post;
    }
}
