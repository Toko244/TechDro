<?php

namespace App\Models;

use Carbon\Carbon;
use App\Traits\AuthorTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Component extends Model
{
    use AuthorTrait, Translatable;

    protected $fillable = [
        'section_id',
        'user_id',
        'name',
        'type_id',
        'component_data_type',
        'section_data_type',
        'post_id',
        'additional',
        'image'
    ];
    protected $casts = [
        'additional' => 'collection',
    ];
    protected $appends = [
        'type_name',
    ];

    public $translatedAttributes = [
        'title',
        'short_title',
    ];

    public function scopeFilter($query, $filters)
    {
        $query->when(isset($filters['keyword']), function ($q) use ($filters) {
            $q->where('name', 'LIKE', "%{$filters['keyword']}%");
        })->when(isset($filters['type']), function ($q) use ($filters) {
            $q->whereIn('type_id', $filters['type']);
        })->when(isset($filters['start_date']), function ($q) use ($filters) {
            $q->where('updated_at', '>=', Carbon::createFromFormat('d/m/Y', $filters['start_date'])->startOfDay());
        })->when(isset($filters['end_date']), function ($q) use ($filters) {
            $q->where('updated_at', '<=', Carbon::createFromFormat('d/m/Y', $filters['end_date'])->endOfDay());
        });

        return $query;
    }

    public function files($type = null)
    {
        return $this->hasMany(ComponentFile::class, 'component_id', 'id');
    }

    public function author(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id')->select('id', 'name', 'email');
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    public function getTypeNameAttribute()
    {
        return $this->type_id ?
            array_keys(getContentType('componentTypes', $this->type_id))[0] :
            '';
    }
    public function getFieldsAttribute()
    {
        return collect(Config::get('componentTypes'))->where('id', $this->type_id)->first()['fields'];
    }
    /**
     * Get the user that owns the Component
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * The component belongs to many posts.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'component_posts');
    }
    public function component_connection_posts()
    {
        return $this->belongsToMany(Post::class, 'component_connection_post');
    }
    public function getViewPath()
    {
        $componentType = config('componentTypes.' . $this->type_name);
        if ($componentType && isset($componentType['folder'])) {
            return $componentType['folder'];
        }

        return 'default_folder';
    }
    /**
     * Get all of the componentables for the Component
     */
    public function componentables(): HasMany
    {
        return $this->hasMany(Componentable::class, 'component_id', 'id');
    }

    public function connectionPosts()
    {
        return $this->hasMany(ComponentPost::class, 'component_id', 'id');
    }

    public function getConfigIds()
    {
        // Get all PHP files from the config directory
        $configFiles = Config::get('componentTypes');

        $configIds = [];

        // Loop through each config file
        foreach ($configFiles as $file) {
            // Get the file name without extension
            $fileName = pathinfo($file, PATHINFO_FILENAME);

            // Check if the file name ends with ".php" and is not the "app.php" file
            if (Str::endsWith($fileName, '.php') && $fileName !== 'app') {
                // Retrieve the config values
                $configValues = config($fileName);

                // Assuming the ID key is always 'id', adjust it accordingly
                $id = $configValues['id'] ?? null;

                // Store the ID in the result array with the config file name as key
                $configIds[$fileName] = $id;
            }
        }

        return $configIds;
    }
}
