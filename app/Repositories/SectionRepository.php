<?php

namespace App\Repositories;

use App\Models\Slug;
use App\Models\Section;
use App\Models\PostFile;
use App\Models\MenuSection;
use Illuminate\Http\Request;
use App\Models\Componentable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Interfaces\SectionRepositoryInterface;

class SectionRepository implements SectionRepositoryInterface
{
    public function getAllSections()
    {
        return Section::where('parent_id', null)->orderBy('order', 'asc')->with('children', 'translation')->get();
    }

    public function getSectionById(int $id)
    {
        return Section::find($id);
    }

    public function getSectionType($id)
    {
        $section = Section::whereId($id)->pluck('type_id')->first();

        return $section;
    }

    public function storeSection(array $data)
    {
        Validator::validate($data, [
            'type_id' => 'required',
        ]);

        $data['additional'] = getAdditional($data, config('sectionAttr.additional'));

        foreach (config('app.locales') as $locale) {

            $data[$locale]['slug'] = str_replace(' ', '-', $data[$locale]['slug']);

            $fullSlug[$locale] = $locale.'/'.$data[$locale]['slug'];

            $data[$locale]['locale_additional'] = getAdditional($data[$locale], config('sectionAttr.translateable_additional'));
        }

        $data['order'] = Section::max('id');

        $section = Section::create($data);

        if (isset($data['menu_types']) && $data['menu_types'] !== null) {
            foreach ($data['menu_types'] as $type) {
                MenuSection::create([
                    'section_id' => $section->id,
                    'menu_type_id' => $type,
                ]);
            }
        }

        foreach (config('app.locales') as $locale) {
            $section->slugs()->create([
                'fullSlug' => $fullSlug[$locale],
                'slug' => $data[$locale]['slug'],
                'slugable_id' => $section->id,
                'locale' => $locale,
            ]);
        }

        return $section;
    }

    public function updateSection($id, Request $request)
    {

        $values = $request->all();
        Validator::validate($values, [
            'type_id' => 'required',
        ]);
        $section = Section::where('id', $id)->with('translations')->first();
        MenuSection::where('section_id', $id)->delete();
        $values['additional'] = getAdditional($values, config('sectionAttr.additional'));

        foreach (config('app.locales') as $key => $locale) {

            if ($section->translations[$key]['slug'] != $values[$locale]['slug']) {

                $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['slug']);
            } else {
                $values[$locale]['slug'] = $section->translations[$key]['slug'];
            }

            $values[$locale]['locale_additional'] = getAdditional($values[$locale], config('sectionAttr.translateable_additional'));
        }

        foreach (config('app.locales') as $key => $locale) {
            $section->slugs()->create([
                'fullSlug' => $locale.'/'.$values[$locale]['slug'],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $id,
                'locale' => $locale,
            ]);
        }
        $section = Section::find($id)->update($values);

        if (isset($values['menu_types']) && $values['menu_types'] !== null) {
            foreach ($values['menu_types'] as $type) {
                MenuSection::create([
                    'section_id' => $id,
                    'menu_type_id' => $type,
                ]);
            }
        }

        return redirect()->route('section.list', [app()->getLocale()]);

    }

    public function deleteSection($id)
    {
        $section = Section::where('id', $id)->with('translations', 'posts')->first();

        if (count($section->posts) > 0) {
            foreach ($section->posts as $key => $post) {

                if (isset($post->image) && File::exists(config('config.file_path').$post->image)) {
                    File::delete(config('config.file_path').$post->image);
                }
                $files = PostFile::where('post_id', $post)->get();
                if ($files) {
                    foreach ($files as $file) {
                        if (File::exists(config('config.image_path').$file->file)) {
                            File::delete(config('config.image_path').$file->file);
                        }
                        if (File::exists(config('config.thumb_path').'thumb/'.$file->file)) {
                            File::delete(config('config.thumb_path').'thumb/'.$file->file);
                        }
                        $file->delete();
                    }
                }
                $post->slugs()->delete();
            }
        }
        Slug::where('slugable_id', $id)->where('slugable_type', 'App\Models\Section')->delete();
        // $section->slugs()->delete();
        $section->delete();

    }
}
