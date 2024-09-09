<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserRolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Check if the permission exists before creating
        $viewUsersPermission = Permission::firstOrCreate([
            'name' => 'all',
            'guard_name' => 'web', // Optional, depends on your configuration
        ]);

        // Check if the role exists before creating
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web', // Optional
        ]);

        // Assign permission to the role if not already assigned
        if (!$adminRole->hasPermissionTo($viewUsersPermission)) {
            $adminRole->givePermissionTo($viewUsersPermission);
        }

        // Assign role to the permission
        if (!$viewUsersPermission->hasRole($adminRole)) {
            $viewUsersPermission->assignRole($adminRole);
        }

        // Check if the user exists before creating
        $user = User::updateOrCreate(['email' => 'admin@gmail.com'],[
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'is_admin_user' => 1,
            'is_superadmin' => 1,
            'status' => 1,
            'level' => 1,
            "is_verfied" => 1,
        ]);

        // Assign the role to the user if not already assigned
        if (!$user->hasRole($adminRole)) {
            $user->assignRole($adminRole);
        }
    }
}
