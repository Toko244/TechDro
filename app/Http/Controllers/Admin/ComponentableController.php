<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateComponentableRequest;
use App\Http\Requests\GetComponentablesRequest;
use App\Http\Requests\UpdateComponentableRequest;
use App\Models\Component;
use Illuminate\Support\Facades\Redirect;
use App\Models\Componentable;
use App\Models\Post;
use Illuminate\Http\Response;
use App\Models\Section;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ComponentableController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct(private ComponentableRepositoryInterface $componentableRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(GetComponentablesRequest $request)
    {
        $section = Section::where('id', $request->section_id)->first();
        $post = Post::where('id', $request->post_id)->first();
        $componentables = $this->componentableRepository->getComponentables($request->all());
        $components = Component::where('section_id', $request->id)->get();

        return view('admin.componentable.list', compact('componentables', 'components', 'section', 'post'));
    }

    public function create($Id, Request $request)
    {
        $sections = Section::all();
        $post = Post::where('id', $Id)->first();
        $section = Section::where('id', $Id)->first();
        $components = Component::all();

        return view('admin.componentable.add', compact('sections', 'section', 'Id', 'post', 'components'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateComponentableRequest $request)
    {
        if ($request->has('post_id')) {
            $request->merge(['post_id' => $request->post_id]);
        } else {
            $request->merge(['section_id' => $request->section_id]);
        }

        $componentable = $this->componentableRepository->create($request->validated());

        $redirectUrl = route('componentable.index', ['id' => $componentable->componentable_id, 'locale' => app()->getLocale()]);

        if ($request->has('section_id')) {
            return Redirect::to($redirectUrl."/?section_id=".$request['section_id']);
        } else {
            return Redirect::to($redirectUrl."/?post_id=".$request['post_id']);
        }
    }

    /**
     * Display the specified resource.s
     */
    public function show(Componentable $componentable)
    {
        $componentable->load(['componentable', 'component']);

        return response([
            'componentable' => $componentable,
        ], 200);
    }
    public function edit($id)
    {

        $components = Component::all();
        $componentable = Componentable::where('component_id', $id)->first();

        $sections = Section::all();
        return view('admin.componentable.edit', compact('componentable', 'sections', 'components'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComponentableRequest $request, Componentable $componentable)
    {
        $componentable->update($request->validated());

        return response([
            'componentable' => $componentable->refresh(),
            'message' => 'Componentable Updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Componentable $componentable)
    {

        $componentable->delete();

        return Redirect::route('componentable.index', [app()->getLocale(), 'id' => $componentable->componentable_id]);
    }
    public function arrange(Request $request)
    {
        $array = $request->input('orderArr');

        Componentable::rearrange($array);

        return ['array' => $array];
    }
}
