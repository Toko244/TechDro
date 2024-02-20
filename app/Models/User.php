<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasPermissions, HasRoles, LogsActivity, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'permissions',
        'role',
    ];

    public function getPermissionsAttribute()
    {
        $permissions = $this->roles->flatMap(function ($role) {
            return $role;
        });

        return $permissions->pluck('name')->unique();
    }

    public function scopeFilter($query, $filters)
    {
        $query->when(isset($filters['roles']), function ($q) use ($filters) {
            $q->whereHas('roles', function ($query) use ($filters) {
                $query->whereIn('name', $filters['roles']);
            });
        });

        return $query;
    }

    public function getRoleAttribute()
    {
        return $this->roles = $this->getRoleNames();
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['login', 'logout']);
    }

    public function getTypeAttribute()
    {

        return Config::get('userTypes.'.$this->type_id);
    }

    public function isType($user_type)
    {

        return $this->type_id <= array_search($user_type, Config::get('userTypes'));
    }

    public function isStrictType($user_type)
    {

        return $this->type_id = array_search($user_type, Config::get('userTypes'));
    }

    /**
     * Get the UserLog associated with the User
     */
    public function log(): HasOne
    {
        return $this->hasOne(UserLog::class, 'user_id', 'id');
    }
}
