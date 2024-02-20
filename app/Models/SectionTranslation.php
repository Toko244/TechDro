<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTranslation extends Model
{
    use HasFactory;

    protected $casts = [
        'locale_additional' => 'collection',
    ];

    protected $fillable = [
        'section_id',
        'locale',
        'title',
        'keywords',
        'desc',
        'icon',
        'locale_additional',
        'active',
    ];
}
