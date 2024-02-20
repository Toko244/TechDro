<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\Section;
use App\Models\Submission;
use App\Models\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public static function index($model, $language_slugs)
    {
        if (request()->method() == 'POST') {
            $values = request()->all();
            $values['additional'] = getAdditional($values, config('contactFormAttr.additional'));
            $submission = Submission::create($values);
            $data2 = trans('website.request_sent');
            Mail::to(settings('email'))->send(new \App\Mail\SendMail($data2));

            return redirect()->back()->with([
                'message' => trans('website.submission_sent'),
            ]);
        }
        if ($model->type_id == 2) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            $post = $section->sectionPost();

            return view('website.text-page', compact('section', 'post', 'language_slugs'));
        }

        if ($model->type_id == 3) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            // $model->load('translation', 'posts.translation');
            $files = PostFile::whereIn('post_id', $model->posts->pluck('id'))->paginate(settings('gallery_pagination'));

            return view('website.photo-video', compact('section', 'language_slugs', 'files'));
        }

        if ($model->type_id == 4) {
            $section = Section::where('id', $model->id)->with('translation')->first();

            return view('website.contact', compact('section', 'language_slugs'));
        }
        if ($model->type_id == 5) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            $post = $section->sectionPost();
            $components = Section::where([['is_component', true], ['parent_id', $section->id]])->orderBy('order', 'asc')->select('type_id', 'id')->paginate(settings('list_pagination'));

            // $components = $section->components();
            return view('website.list-page', compact('section', 'post', 'components', 'language_slugs'));
        }
    }

    public static function show($model, $locales)
    {
        $post = Post::where('id', $model->id)
            ->whereHas('translations', function ($que) {
                $que->where('locale', app()->getlocale())
                    ->where('active', true);
            })
            ->with('files')
            ->first();

        return view("website.pages.{$model->parent->type['folder']}.show", [
            'section' => $post,
            'post' => $post,
            'locales' => $locales,
        ])->render();
    }

    public static function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);
        $subscriber = Subscribers::where('email', $validatedData['email'])->first();
        if ($subscriber == null) {
            $subscription = new Subscribers;
            $subscription->locale = app()->getLocale();
            $subscription->email = $validatedData['email'];
            $subscription->save();
            $data2 = trans('website.subscribed_done');
            Mail::to($validatedData['email'])->send(new \App\Mail\SendMail($data2));

            // Mail::to(settings('mail'))->send(new \App\Mail\Mailers([$values]));
            return back()->with([
                'message' => trans('website.successfuly_subscribed'),
            ]);
        }

        return back()->with([
            'message' => trans('website.allready_subscribed'),
        ]);
    }

    public function front()
    {
        return view('website.front');
    }
}