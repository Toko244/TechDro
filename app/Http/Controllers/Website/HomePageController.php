<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Post;
use App\Models\Component;
use App\Models\Submission;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public static function homePage($model, $locales = null)
    {

        if ($model == null) {
            $model = Section::where('type_id', 1)->first();
        }
        if ($locales == null) {
            $locales = [];
            foreach (config('app.locales') as $value) {
                $locales[$value] = '/' . $value;
            }
        }
        $section = $model;
        $posts = Post::where('section_id', $section->id)->with('translation')->get();

        $language_slugs = $model->getTranslatedFullSlugs();

        $Component_generalBanner = Component::whereHas('translation', function ($q) {
            $q->where('active', 1)->whereLocale(app()->getLocale());
        })->where('type_id', 1)
            ->with('translations', 'posts.translation')
            ->get();


        $postsgeneralBanners = collect();
        $Component_generalBanner->each(function ($component) use (&$postsgeneralBanners) {
            $posts = $component->posts->map(function ($post) {
                return $post->load('translation');
            });
            $postsgeneralBanners = $postsgeneralBanners->merge($posts);
        });
        $TextLeft_ImageRight = Component::whereHas('translation', function ($q) {
            $q->where('active', 1)->whereLocale(app()->getLocale());
        })->where('type_id', 2)
            ->with('translations', 'posts.translation')
            ->first();

        // dd($about_posts[0]->coalition_banner);
        return view('website.home', compact(
            'model',
            'language_slugs',
            'Component_generalBanner',
            'posts',
            'postsgeneralBanners',
            'TextLeft_ImageRight',

        ));
    }
}
