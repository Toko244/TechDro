<?php

namespace App\Repositories\Interfaces;

interface SlugRepositoryInterface
{
    public function initiateMany($data);

    public function getSlugableBySlug($slug);
}
