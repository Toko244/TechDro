<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait AuthorTrait
{
    public static function bootAuthorTrait()
    {
        static::creating(function ($model) {
            $model->user_id = Auth::id();
        });

        static::updating(function ($model) {
            $model->user_id = Auth::id();
        });
    }
}
