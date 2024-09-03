<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Spatie\Permission\Contracts\Role as RoleContract;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;



class Role extends Eloquent
{
     use HasPermissions;
    use HasRoles;

    protected $connection = 'mongodb';
    protected $collection = 'roles';

    protected $fillable = [
        'name',
        'guard_name',
        'permissions'
    ];
    public function getPermissionsAttribute()
    {
        
        if (array_key_exists('permissions', $this->attributes)) {
            return $this->attributes['permissions'];
        } else {
            return [];
        }
    }

    public function permissions() {
        
        return $this->belongsToMany(Permission::class, null, 'role_ids', 'permission_ids');
    }

    public function users()
    {
        
        return $this->belongsToMany(User::class, null, 'role_id', 'user_ids');
    }
    /*
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, null, 'id', 'permissions');
    }
        */
        
    /**
     * Find a role by its name.
     *
     * @param string $name
     * @param string|null $guardName
     * @return \Spatie\Permission\Contracts\Role
     *
     * @throws \Spatie\Permission\Exceptions\RoleDoesNotExist
     */
    public static function findByName(string $name, $guardName = null): RoleContract
    {
        
        $guardName = $guardName ?? config('auth.defaults.guard');

        $role = static::where('name', $name)->where('guard_name', $guardName)->first();

        if (!$role) {
            throw \Spatie\Permission\Exceptions\RoleDoesNotExist::create($name, $guardName);
        }

        return $role;
    }

    /**
     * Find a role by its id.
     *
     * @param int|string $id
     * @param string|null $guardName
     * @return \Spatie\Permission\Contracts\Role
     *
     * @throws \Spatie\Permission\Exceptions\RoleDoesNotExist
     */
    public static function findById($id, $guardName = null): RoleContract
    {
        
        $guardName = $guardName ?? config('auth.defaults.guard');

        $role = static::where('_id', $id)->where('guard_name', $guardName)->first();

        if (!$role) {
            throw \Spatie\Permission\Exceptions\RoleDoesNotExist::withId($id);
        }

        return $role;
    }

    /**
     * Find or create a role by its name.
     *
     * @param string $name
     * @param string|null $guardName
     * @return \Spatie\Permission\Contracts\Role
     */
    public static function findOrCreate(string $name, $guardName = null): RoleContract
    {
        
        $guardName = $guardName ?? config('auth.defaults.guard');

        $role = static::where('name', $name)->where('guard_name', $guardName)->first();

        if (!$role) {
            return static::create(['name' => $name, 'guard_name' => $guardName]);
        }

        return $role;
    }

    /**
     * Get the default guard name for the model.
     *
     * @return string
     */
    public function getDefaultGuardName(): string
    {
        
        return $this->guard_name ?? config('auth.defaults.guard');
    }

    /**
     * Get the bool value whether permissions array data has item.
     *
     * @return bool
     */
    public function hasPermissionTo($search, $permissions): bool
    {
       
        if ($permissions === $search) {
            return true;
        } elseif (is_array($permissions) && in_array($search, $permissions)) {
            return true;
        } elseif (is_string($permissions) && $permissions === $search) {
             return true;
        } elseif (is_int($permissions) && $permissions === $search) {
             return true;
        } elseif ($permissions === null && $search === null) {
             return true;
        } else {
             return false;
        }
    }
    
}
