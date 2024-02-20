<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;

class ContactPageController extends Controller
{
    public static function index($model, $locales)
    {
        $section = Section::where('id', $model->id)
            ->with('posts', function ($q) {
                $q->whereHas('translations', function ($que) {
                    $que->where('locale', app()->getlocale())
                        ->where('active', true);
                })->first();
            })
            ->first();

        return view('website.pages.contact.show', compact('section', 'locales'));
    }
}
