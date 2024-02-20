<?php

namespace App\Repositories;

use App\Models\Component;
use App\Models\ComponentPost;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ComponentPostRepositoryInterface;

class ComponentPostRepository implements ComponentPostRepositoryInterface
{
    public function getPostsBySection($sectionId, $with = [])
    {
        $post = Post::where('section_id', $sectionId)->with($with)->orderBy('sort', 'asc')->paginate(config('settings.website_pagination'));

        return $post;
    }

    public function getPostsByComponent($componentId, $with = [])
    {

        $component = Component::where('id', $componentId)->firstOrFail();

        if ($component->component_data_type == 'connected' && $component->section_data_type == 'automate') {
            if ($component->section_id !== null) {
                $postQuery = Post::where('section_id', $component->section_id);

                return $postQuery->filter(request()->all())
                    ->with($with)
                    ->orderBy('sort', 'asc')
                    ->limit(5)->get();
            }
        } else {
            $posts = Post::whereHas('components', function ($q) use ($componentId) {
                $q->where('component_id', $componentId);
            })
                ->with($with)
                ->orderBy('sort', 'asc')
                ->get();

            return $posts;
        }
    }

    public function getComponentPostsByType($ids)
    {

        $posts = Post::whereHas('section', function ($query) use ($ids) {
            $query->whereIn('type_id', getComponent($ids));
        })
            ->orderBy('sort', 'asc')
            ->paginate(config('settings.website_pagination'));

        return $posts;
    }

    public function createComponentPost($data)
    {
        $componentPost = ComponentPost::create($data);

        return $componentPost;
    }

    public function sort($data)
    {
        // dd($data);
        foreach ($data as $id => $key) {
            ComponentPost::whereId($id)->first()->update(['sort' => $key]);
        }

        return $data;
    }

    public function deleteComponentPost($id)
    {
        $componentPost = ComponentPost::where('component_id', $id)->first();
        $post = Post::where('id', $componentPost->post_id);

        $post->delete();
        if ($componentPost) {
            $componentPost->delete();
        }
    }
}
