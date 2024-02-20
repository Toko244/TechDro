<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface SectionRepositoryInterface
{
    public function getAllSections();

    public function getSectionById(int $id);

    public function updateSection($id, Request $request);

    public function storeSection(array $data);

    public function deleteSection($id);

    public function getSectionType($id);
}
