<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComponentRequest;
use App\Http\Requests\ComponentUpdateRequest;
use App\Models\Component;
use App\Models\Componentable;
use App\Models\ComponentPost;
use App\Models\ComponentFile;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use App\Models\Section;
use App\Repositories\Interfaces\ComponentInterfaceRepository;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;
use App\Repositories\Interfaces\ComponentPostRepositoryInterface;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ComponentsController extends Controller
{
    use FileUploadTrait;

    public function __construct(
        private ComponentInterfaceRepository $componentrepository,

        private ComponentPostRepositoryInterface $componentPostRepository,
        private ComponentableRepositoryInterface $componentableRepository
    ) {
    }

    /**
     * index
     *  Lists Sections
     *
     * @return void
     */
    public function index(Request $request)
    {

        $count = $this->componentrepository->getCount($request->all());
        $components = $this->componentrepository->getComponents($request->all());
        $componentables = Componentable::all();
        // dd($components);
        return view('admin.components.list', compact('components', 'componentables', 'count'));
    }

    public function create()
    {
        $components = Component::with('translation')->get();
        $sections = Section::all();
        return view('admin.components.add', compact(['components', 'sections']));
    }

    public function store(ComponentRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image']) && ($data['image'] != null)) {
            $name = time() . '.' . $data['image']->extension();
            $data['image']->move(config('config.image_path') . config('config.thumb_path'), $name);
            $data['image'] = '';
            $data['image'] = $name;
        }

        $component = Component::create($data);
        if ($request->filled('post_id')) {
            $component->posts()->sync($request->post_id);
        }

        $componentTypes = getContentTypes('componentTypes');

        return redirect()->route('components.list', [app()->getLocale()])->with([
            'component' => $component,
            'connection' => $component->connectionPosts,
            'type' => $componentTypes,
        ], Response::HTTP_CREATED);
    }


    public function edit($id, $sec = null)
    {
        $component = Component::whereId($id)->with('connectionPosts', 'section')->first();

        $component_posts = $component->connectionPosts->pluck('post_id')->toArray();

        // Retrieve posts based on the section of the component
        $posts = [];
        if (!empty($component->section_id)) {
            $posts = Post::where('section_id', $component->section_id)->with('translations')->get();
        }

        $section = Section::where('id', $component->section_id)->first();

        // Prepare options for the select element
        $selectOptions = [];
        foreach ($posts as $key => $conectionPost) {
            $selectOptions[] = [
                'value' => $conectionPost->id,
                'text' => $conectionPost->translate()->title,
                'selected' => in_array($conectionPost->id, $component_posts),
            ];
        }



        return view('admin.components.edit', compact('component', 'selectOptions', 'section'));
    }



    public function update($id, Request $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->all();

            // Move image if present
            if ($request->hasFile('image')) {
                $name = time() . '.' . $request->file('image')->extension();
                $request->file('image')->move(config('config.image_path') . config('config.thumb_path'), $name);
                $data['image'] = $name;
            }

            // Set section_id to null if empty
            if (empty($data['section_id'])) {
                $data['section_id'] = null;
            }

            $component = Component::find($id);


            if (isset($data['post_id']) && $data['post_id'] != '') {
                $component->posts()->sync($data['post_id']);
                unset($data['post_id']);
            } else {
                $component->connectionPosts()->delete();
            }

            // Update the component's attributes
            $component->update($data);

            // Sort if sort is present
            if (isset($data['sort'])) {
                $this->componentPostRepository->sort($data['sort']);
            }

            // Load relationships
            $component->load('componentables.componentable.translation', 'author');

            // Commit the transaction
            DB::commit();

            return redirect()->route('components.list', [app()->getLocale()])->with(
                [
                    'message' => __('component-updated-successfully'),
                    'component' => $component,
                ],
                Response::HTTP_CREATED
            );
        } catch (\Throwable $th) {
            // Rollback the transaction on exception
            DB::rollBack();

            return response(
                [
                    'error' => 'An error occurred',
                    'message' => $th->getMessage(),
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }


    public function getType($typeId)
    {
        $componentTypes = getContentType('componentTypes', $typeId);
        $type = $componentTypes[array_key_first($componentTypes)];

        return view('admin.components.add', compact(['type']));
    }

    public function post($id)
    {
        $data = $this->componentrepository->componentPost($id);
        $id = $data['id'];

        return view('admin.components.list', compact('components', 'id', 'section'));
    }

    public function destroy($id)
    {

        Component::where('id', $id)->delete();

        return Redirect::route('components.list',  [app()->getLocale()])->with('success', 'Component deleted successfully.')->with('id', $id);
    }
    public function DeleteImage($que)
    {

        $component = Component::findOrFail($que);

        if ($component->image) {
            $imagePath = public_path(config('config.image_path') . config('config.thumb_path') . $component->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $component->update(['image' => null]);
        }

        return response()->json(['success' => 'File Deleted']);
    }
    public function arrange(Request $request)
    {
        $array = $request->input('orderArr');
        Section::componentrearrange($array);

        return ['error' => false];
    }
    public function CheckName(Request $request)
    {

        $name = $request->name;

        $id = $request->id;



        if (Component::where('name', $name)->where('id', '!=', $id)->exists()) {

            return response()->json(['error' => 'This slug already exists'], 401);
        } else {
            return response()->json(['message' => 'Slug is available'], 200);
        }

        return response()->json(['name' => $name]);
    }
}
