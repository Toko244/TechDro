<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public static function index(Request $request)
    {
        $language_slugs['en'] = '/en/search?que';
        $language_slugs['ka'] = '/ka/search?que';
        $language_slugs['tr'] = '/tr/search?que';
        if ($request->que != '') {

            $language_slugs['en'] = '/en/search?que='.$request->que;
            $language_slugs['ka'] = '/ka/search?que='.$request->que;
            $language_slugs['tr'] = '/tr/search?que='.$request->que;
            $searchText = $request->que;

            $posts = Post::whereNotNull('section_id')->whereHas('translations', function ($q) use ($searchText) {
                $q->where('locale', app()->getLocale())->where('active', true);
                $q->where('title', 'like', '%'.strtolower($searchText).'%')
                    ->orWhere('desc', 'like', '%'.strtolower($searchText).'%')
                    ->orWhere('text', 'like', '%'.strtolower($searchText).'%')
                    ->orWhere('keywords', 'like', '%'.strtolower($searchText).'%')
                    ->orWhere('locale_additional', 'like', '%'.strtolower($searchText).'%');
            })->with('parent')->with('translation')->get();
            $data = [];
            foreach ($posts as $post) {
                if ($post->parent->is_component == 1) {
                    $data[] = [
                        'slug' => $post->parent->parent->translate(app()->getLocale())->slug,
                        'title' => $post->translate(app()->getLocale())->title,
                        'desc' => str_limit(strip_tags($post->translate(app()->getLocale())->desc)),
                        'section' => $post->parent->parent->translate(app()->getLocale())->title,
                    ];
                } else {

                    $data[] = [
                        'slug' => $post->parent->translate(app()->getLocale())->slug,
                        'title' => $post->translate(app()->getLocale())->title,
                        'desc' => str_limit(strip_tags($post->translate(app()->getLocale())->desc)),
                        'section' => $post->parent->translate(app()->getLocale())->title,
                    ];
                }
            }
            $section = [];

            return view('website.pages.search.index', compact('posts', 'section', 'searchText', 'data', 'language_slugs'));
        } else {
            $language_slugs['en'] = '/en/search?que=';
            $language_slugs['ka'] = '/ka/search?que=';
            $language_slugs['tr'] = '/tr/search?que=';
            $posts = [];
            $data = [];
            $section = [];
            $searchText = '';

            return view('website.pages.search.index', compact('posts', 'section', 'searchText', 'data', 'language_slugs'));
        }

    }
}
