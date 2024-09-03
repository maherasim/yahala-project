<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Spatie\Permission\Contracts\Permission as PermissionContract;
use Spatie\Permission\Traits\HasRoles;

//class Permission extends Eloquent implements PermissionContract
class Permission extends Eloquent 
{
    use HasRoles;

    protected $connection = 'mongodb';
    protected $collection = 'permissions';
 


    /**
     * Find a permission by its name.
     *
     * @param string $name
     * @param string|null $guardName
     * @return \Spatie\Permission\Contracts\Permission
     *
     * @throws \Spatie\Permission\Exceptions\PermissionDoesNotExist
     */
    public static function findByName(string $name, $guardName = null): PermissionContract
    {
        
        $guardName = $guardName ?? config('auth.defaults.guard');

        $permission = static::where('name', $name)->where('guard_name', $guardName)->first();

        if (!$permission) {
            throw \Spatie\Permission\Exceptions\PermissionDoesNotExist::create($name, $guardName);
        }

        return $permission;
    }

    public function roles()
    {
        
        return $this->belongsToMany(Role::class, null, 'permission_ids', 'role_ids');
    }

    /**
     * Find a permission by its id.
     *
     * @param int|string $id
     * @param string|null $guardName
     * @return \Spatie\Permission\Contracts\Permission
     *
     * @throws \Spatie\Permission\Exceptions\PermissionDoesNotExist
     */
    public static function findById($id, $guardName = null): PermissionContract
    {
        
        $guardName = $guardName ?? config('auth.defaults.guard');

        $permission = static::where('_id', $id)->where('guard_name', $guardName)->first();

        if (!$permission) {
            throw \Spatie\Permission\Exceptions\PermissionDoesNotExist::withId($id);
        }

        return $permission;
    }

    /**
     * Find or create a permission by its name.
     *
     * @param string $name
     * @param string|null $guardName
     * @return \Spatie\Permission\Contracts\Permission
     */
    public static function findOrCreate(string $name, $guardName = null): PermissionContract
    {
        
        $guardName = $guardName ?? config('auth.defaults.guard');

        $permission = static::where('name', $name)->where('guard_name', $guardName)->first();

        if (!$permission) {
            return static::create(['name' => $name, 'guard_name' => $guardName]);
        }

        return $permission;
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
}
