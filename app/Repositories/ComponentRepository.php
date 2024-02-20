<?php

namespace App\Repositories;

use App\Models\Component;
use Illuminate\Support\Facades\Config;
use App\Repositories\Interfaces\ComponentInterfaceRepository;

class ComponentRepository implements ComponentInterfaceRepository
{
    public function getComponents(array $filters)
    {
        $components = Component::filter($filters)->select('id', 'name', 'updated_at', 'type_id', 'user_id')
            ->orderBy('updated_at', 'desc')
            ->with('posts', 'componentables.componentable.translation', 'author')
            ->withTranslation()->paginate(15);

        return $components;
    }

    public function getCount(array $filters)
    {
        return Component::filter($filters)->count();
    }

    public function create($data)
    {
        return Component::create($data);
    }

    public function getComponentType($id)
    {
        $component = Component::whereId($id)->pluck('type_id')->first();

        return $component;
    }

    public function getComponentDataType($id)
    {
        $data_type = Component::whereId($id)->pluck('component_data_type')->first();

        return $data_type;
    }
}
