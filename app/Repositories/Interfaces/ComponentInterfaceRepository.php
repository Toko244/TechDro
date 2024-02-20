<?php

namespace App\Repositories\Interfaces;

interface ComponentInterfaceRepository
{
    public function getComponents(array $filters);

    public function getCount(array $filters);

    public function create($data);

    public function getComponentType($typeId);

    public function getComponentDataType($typeId);
}
