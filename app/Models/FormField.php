<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormField extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'type',
        'data',
        'form_id',
        'validation',
    ];

    protected $casts = [
        'data' => 'array',
        'validation' => 'array',
    ];

    public $translatedAttributes = [
        'title',
    ];

    /**
     * Get the form that owns the FormField
     */
    public function form(): BelongsTo
    {
        return $this->belongsTo(form::class, 'id', 'form_id');
    }
}
