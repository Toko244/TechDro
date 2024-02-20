<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Section extends Model
{
    use HasFactory;
    use LogsActivity;
    use Translatable;

    protected $casts = [
        'additional' => 'collection',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order',
        'cover',
        'additional',
        'parent_id',
        'type_id',
    ];

    protected $hidden = [
        '_token',
    ];

    public $translatedAttributes = [
        'title',
        'keywords',
        'slug',
        'desc',
        'icon',
        'locale_additional',
        'active',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function slug()
    {

        $slug = Slug::where('slugable_type', 'App\Models\Section')
            ->where('slugable_id', $this->id)
            ->first();
        if ($slug !== null) {
            return $slug->slug;
        }

        return null;
    }

    public function slugs()
    {
        return $this->morphMany(Slug::class, 'slugable');
    }

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    /**
     * tgis function gets Type of the section
     * you can use it with just "->type"
     *
     * @return void
     */
    public function getTypeAttribute()
    {

        return collect(Config::get('sectionTypes'))->where('id', $this->type_id)->first();
    }

    /**
     * tgis function gets Type of the section
     * you can use it with just "->fields"
     *
     * @return void
     */
    public function getFieldsAttribute()
    {
        return collect(Config::get('sectionTypes'))->where('id', $this->type_id)->first()['fields'];
    }

    /**
     * tgis function gets Type of the section
     * you can use it with just "->componentfields"
     *
     * @return void
     */
    public function getComponentFieldsAttribute()
    {
        return collect(Config::get('componentTypes'))->where('id', $this->type_id)->first()['fields'];
    }

    public function getFullSlug()
    {
        $slug = Slug::where('slugable_type', 'App\Models\Section')->where('slugable_id', $this->id)->where('locale', app()->getlocale())->first();
        if ($slug !== null) {

            return $slug->fullSlug;
        }

        return null;
    }

    /**
     * isMenuType can section o
     *
     * @param  mixed  $type
     * @return void
     */
    public function scopeMenuType($query, $type)
    {

        $sections_id = MenuSection::where('menu_type_id', array_search($type, menuTypes()))->pluck('section_id')->toArray();

        return $query->where('id', $sections_id);
    }

    public function post()
    {
        return Post::where('section_id', $this->id)->with('submissions', 'translations')->first();

    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'section_id', 'id')->with(['translation' => function ($query) {
            $query->where('locale', app()->getLocale());
        }])->orderBy('date', 'desc')->orderBy('id', 'asc');
    }

    public function menuTypes()
    {
        return $this->hasMany(MenuSection::class, 'section_id', 'id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Section', 'parent_id')->with(['translations' => function ($query) {
            $query->where('locale', app()->getLocale());
        }])
            ->with('parent')->with('children')->orderBy('order', 'asc');
    }

    public function sectionPost()
    {

        $post = $this->hasOne('App\Models\Post', 'section_id')->with(['translation' => function ($query) {
            $query->where('locale', app()->getLocale());
            $query->where('active', 1);
        }])->first();

        return $post;

        // return Post::where('section_id', $this->id)->with(['translation' => function($query){
        //   $query->where('locale', app()->getLocale());
        //   $query->where('active', 1);
        // }])->first();

    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Section', 'parent_id')->with('parent.translations');
    }

    public static function rearrange($array)
    {
        self::_rearrange($array, 0);

        \App\Models\Section::all()->each(function ($item) {
            $item->save();
        });
    }

    public static function componentrearrange($array) {

    }

    private static function _rearrange($array, $count, $parent = null)
    {
        foreach ($array as $a) {
            $count++;
            self::where('id', $a['id'])->update(['parent_id' => $parent, 'order' => $count]);

            if (isset($a['children'])) {
                $count = self::_rearrange($a['children'], $count, $a['id']);
            }
        }

        return $count;
    }

    public function getTranslatedFullSlugs($slugs = [], $parent = null)
    {

        if (! count($slugs)) {
            $translations = $this->translations;

            foreach ($translations as $key => $value) {
                $slugs[$value->locale] = $value->slug;
            }

            // $parent = $this->parent;
            $parent = '';
        } else {
            $translations = $parent->translations;

            foreach ($translations as $key => $value) {
                $slugs[$value->locale] = $value->slug.'/'.$slugs[$value->locale];
            }

            // $parent = $parent->parent;
            $parent = '';
        }

        if ($parent == null) {
            foreach ($slugs as $key => $value) {
                if (count($_GET)) {
                    $slugs[$key] = $key.'/'.$value.'?'.http_build_query($_GET);
                } else {
                    $slugs[$key] = $key.'/'.$value;
                }
            }

            return $slugs;
        }

        return $this->getTranslatedFullSlugs($slugs, $parent);
    }

    public function files($type = null)
    {
        if ($type !== null) {
            return $this->hasMany(PostFile::class, 'section_id', 'id')->where('type', $type);
        }

        return $this->hasMany(PostFile::class, 'section_id', 'id');
    }

    /**
     * Get all of the section's componentables.
     */
    public function componentables(): MorphMany
    {
        return $this->morphMany(Componentable::class, 'componentable');
    }

    public function component(): HasOne
    {
        return $this->hasOne(Component::class, 'section_id', 'section_id');
    }
}
