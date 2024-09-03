<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminFixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['email' => 'admin@gmail.com'],[
            'name' => 'Super',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => '2024-03-27 12:48:33',
            'status' => (int)'1',
            'is_admin_user' => (int)'1',
            'level' => (int)'1',
            'is_verfied' => (int)'1',
            'is_superadmin' => (int)'1',
            'is_verfied' => (int)'1',
            'last_name' => 'Admin',
            'phone' => '940896049045'
        ]);
    }
}
