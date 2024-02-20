<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [];

    public $translatedAttributes = [
        'title',
    ];

    /**
     * Get the account associated with the Form
     */
    public function account(): HasOne
    {
        return $this->hasOne(Account::class, 'form_id', 'id');
    }

    /**
     * Get all of the fields for the Form
     */
    public function fields(): HasMany
    {
        return $this->hasMany(FormField::class, 'form_id', 'id');
    }

    public function posts()
    {
        return $this->BelongsTo(Post::class);
    }

    public static function rearrange($array)
    {
        self::_rearrange($array, 0);

        \App\Models\Section::all()->each(function ($item) {
            $item->save();
        });
    }

    private static function _rearrange($array, $count, $parent = null)
    {
        foreach ($array as $a) {
            dd($a);

            $count++;
            FormField::where('id', $a['id'])->update(['parent_id' => $parent, 'order' => $count]);

            // if(isset($a['children'])) {
            // $count = self::_rearrange($a['children'], $count, $a['id']);

        }// }
    }
}
