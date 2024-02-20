<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Slug extends Model
{
    use HasFactory , HasSlug;

    public $timestamps = false;

    protected $guarded = [];

    public function slugable()
    {
        return $this->morphTo();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::createWithLocales([Config::get('app.locales')])
            ->generateSlugsFrom(function ($model, $locale) {
                return "{$locale} {$model->id}";
            })
            ->saveSlugsTo('slug');
    }
}
