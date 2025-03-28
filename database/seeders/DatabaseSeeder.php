<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(30)->create();
        
      
        $this->call(AdminFixSeeder::class);
        $this->call(EnglishDefault::class);
        $this->call(UserRolePermissionSeeder::class);
        $this->call(UserRoleSettingSeeder::class);
        //$this->call(PermissionsSeeder::class);
    }
}
