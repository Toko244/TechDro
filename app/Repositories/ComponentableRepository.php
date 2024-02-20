<?php

namespace App\Repositories;

use App\Models\Component;
use App\Models\Componentable;
use App\Models\Post;
use App\Models\Section;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;

class ComponentableRepository implements ComponentableRepositoryInterface
{
    public function getComponentables($data)
    {
        if (isset($data['section_id'])) {

            $components = Componentable::where('componentable_type', 'App\Models\Section')
                                        ->where('componentable_id', $data['section_id'])
                                        ->with('translations')
                                        ->orderBy('sort','asc')
                                        ->get();

        } else if (isset($data['post_id'])) {

            $components = Componentable::where('componentable_type', 'App\Models\Post')
                                        ->where('componentable_id', $data['post_id'])
                                        ->with('translations')
                                        ->orderBy('sort','asc')
                                        ->get();
        }

        return $components;
    }

    public function create($data)
    {
        $componentable = isset($data['section_id']) ?
            Section::findOrFail($data['section_id']) :
            Post::findOrFail($data['post_id']);

        $data['sort'] = $componentable->componentables()->max('sort') + 1;

        return $componentable->componentables()->create($data);
    }

    public function sort($data)
    {
        foreach ($data['componentables'] as $componentable) {
            Componentable::where('id', $componentable['id'])->update([
                'sort' => $componentable['sort'],
            ]);
        }

        return true;
    }
}
