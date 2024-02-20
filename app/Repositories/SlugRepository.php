<?php

namespace App\Repositories;

use App\Models\Slug;
use App\Repositories\Interfaces\SlugRepositoryInterface;

class SlugRepository implements SlugRepositoryInterface
{
    /**
     * Initiate multiple Class queries.
     */
    public function initiateMany($data)
    {
        $slugs = [];
        foreach (config('app.locales') as $locale) {
            $newSlug = new Slug([
                'fullSlug' => $locale.'/'.$data[$locale]['slug'],
                'slug' => $data[$locale]['slug'],
                'locale' => $locale,
            ]);
            $slugs[$locale] = $newSlug;
        }

        return $slugs;
    }

    public function getSlugableBySlug($slug, $with = [])
    {
        $slug = Slug::where('slug', $slug)->firstOrFail();
        app()->setLocale($slug->locale);
        $slugable = $slug->slugable()->with($with)->first();

        if (class_basename($slugable) == 'Section') {
            $slugable->load('parent.translation', 'files', 'post.files', 'post.directories');
        } else {
            $slugable->load('section.type', 'section.translation', 'files');
            $slugable->type_name = $slugable->section->type_name;
        }

        return $slugable;
    }
}
