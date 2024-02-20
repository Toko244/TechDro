<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFieldTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_field_id',
        'locale',
        'title',
    ];
}
