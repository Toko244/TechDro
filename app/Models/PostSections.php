<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSections extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'section_id',
    ];

    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'id', 'section_id');
    }
}
