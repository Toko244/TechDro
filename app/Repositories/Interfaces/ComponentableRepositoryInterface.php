<?php

namespace App\Repositories\Interfaces;

interface ComponentableRepositoryInterface
{
    public function getComponentables(array $data);

    public function create($data);

    public function sort($data);
}
