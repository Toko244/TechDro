<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTranslation extends Model
{
    use HasFactory;

    public $fillable = [
        'form_id',
        'form_field_id', // Make sure to include this field
        'locale',
        'title',
    ];
}
