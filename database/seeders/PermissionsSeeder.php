<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
// use Spatie\Permission\Models\Permission;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFile = database_path('data/permissions.json');
        $jsonData = json_decode(file_get_contents($jsonFile), true);
        DB::connection('mongodb')->collection('permissions')->truncate();
        DB::connection('mongodb')->collection('permissions')->insert($jsonData);
    }
}
