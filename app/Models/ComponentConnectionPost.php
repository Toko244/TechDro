<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentConnectionPost extends Model
{
    use HasFactory;
    protected $table = 'component_connection_post';

    protected $fillable = [
        'component_id',
        'post_id',
    ];

    // Define relationships with the Component and Post models
    public function component()
    {
        return $this->belongsTo(Component::class, 'component_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
