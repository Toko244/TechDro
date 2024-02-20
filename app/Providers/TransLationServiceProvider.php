<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class TransLationServiceProvider extends ServiceProvider
{
    /**
     * Create a new service provider instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $translations = [];

        $lang = config('app.locales');

        foreach ($lang as $locale) {
            $langPath = resource_path('lang/'.$locale);

            $translations[$locale] = $this->loadTranslationsForLocale($langPath);

        }

        Cache::rememberForever('translations', function () use ($translations) {
            return json_encode($translations);

        });
    }

    private function loadTranslationsForLocale($langPath)
    {
        $translations = collect(File::allFiles($langPath))
            ->flatMap(function ($file) {
                return [
                    ($translation = $file->getBasename('.php')) => trans($translation),
                ];
            })
            ->toArray();

        return $translations;
    }
}
