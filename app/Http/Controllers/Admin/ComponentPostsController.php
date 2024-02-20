<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Component;
use App\Models\ComponentPost;
use App\Models\Post;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;
use App\Repositories\Interfaces\ComponentPostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComponentPostsController extends Controller
{
    public function __construct(
        private ComponentPostRepositoryInterface $ComponentPostRepository,
        private ComponentableRepositoryInterface $componentableRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */ public function index(Request $request, $component_id)
    {

        $component = Component::where('id', $component_id)->firstOrFail();
        if (isset($component->type_id) && in_array($component->type_id, [])) {

            $post = Post::whereHas('components', function ($q) use ($component_id) {
                $q->where('component_id', $component_id);
            })
                ->with('translations')->first();

            return $post
                ? redirect()->route('post.edit', [app()->getLocale(), $post->id])
                : redirect()->route('component.post.create', [app()->getLocale(), 'component_id' => $component_id]);
        }
        $posts = Post::whereHas('components', function ($q) use ($component_id) {
            $q->where('component_id', $component_id);
        })
            ->with('translations')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.posts.list', compact('posts', 'component'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

        $component = Component::where('id', $id)->firstOrFail();

        return view('admin.componentPosts.create', compact('component'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Handle Post ------
        $component_post = $this->ComponentPostRepository->createComponentPost($request->all());

        return view('admin.componentPosts.index', compact('component_post'))
            ->with('message', __('post-created-successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ComponentPost $componentPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComponentPost $componentPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComponentPost $componentPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $this->ComponentPostRepository->deleteComponentPost($id);

        return redirect()->route('componentPosts.index', [app()->getLocale(), $id]);
    }

    public function getPostsForComponent(Request $request)
    {

        if ($request->has('section_id')) {
            $componentables = $this->ComponentPostRepository->getPostsBySection($request->section_id);
        } else {
            $componentables = $this->ComponentPostRepository->getComponentPostsByType($request->type_id);
        }

        return view('admin.componentPosts.index', compact('componentables'));
    }
}
