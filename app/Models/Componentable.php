<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Componentable extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'short_title',
    ];

    protected $fillable = [
        'component_id',
        'list',
        'detail',
        'active',
        'sort',
        'componentable_type',
        'additional',   // Added field
        'section_id',
        'parent_id'
    ];
    protected $casts = [
        'additional' => 'collection',
    ];
    /**
     * Get all of the owning commentable models.
     */
    public function componentable()
    {
        return $this->morphTo();
    }

    /**
     * Get the component that owns the Componentable
     */
    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class, 'component_id', 'id');
    }
    public function children()
    {
        return $this->hasMany('App\Models\Componentable', 'parent_id')->with(['translations' => function ($query) {
            $query->where('locale', app()->getLocale());
        }])
            ->with('parent')->with('children')->orderBy('sort', 'asc');
    }
    public function parent()
    {
        return $this->belongsTo('App\Models\Componentable', 'parent_id')->with('parent.translations');
    }
    public static function rearrange($array)
    {
        self::_rearrange($array, 0);

        // Save the changes to the database
        self::all()->each(function ($item) {
            $item->save();
        });
    }

    private static function _rearrange($array, $count, $parent = null)
    {
        // dd($array);
        foreach ($array as $a) {
            $count++;
            self::where('id', $a['id'])->update(['sort' => $count]);

            if (isset($a['children'])) {
                $count = self::_rearrange($a['children'], $count, $a['id']);
            }
        }

        return $count;
    }
}
