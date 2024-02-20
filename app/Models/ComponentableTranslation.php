<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponentableTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'short_title',
    ];
}
