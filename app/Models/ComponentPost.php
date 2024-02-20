<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'component_id',
        'post_id',
        'directory_id',
        'data_type',
        'sort',
    ];

    public function directory()
    {
        return $this->hasOne(Directory::class, 'id', 'directory_id')->with('translation');
    }

    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id')->with('translation', 'directories', 'files', 'slugs', 'postDirectories');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'component_posts', 'id', 'post_id')->with('translation', 'directories', 'files', 'slugs', 'postDirectories');
    }

    public function component()
    {
        return $this->belongsTo(Component::class, 'component_posts', 'component_id', 'id');
    }
}
