<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['email' => 'test_yahala@gmail.com'],
                [
                    'name' => 'Test',
                    'email' => 'test_yahala@gmail.com',
                    'password' => Hash::make('123456'),
                    'image' => 'https://www.w3schools.com/w3images/avatar2.png',
                    'email_verified_at' => '2024-03-27T12:48:33.000+00:00',
                    'status' => 1,
                    'level' => 10,
                    'username' => 'testyahala',
                    'fname' => 'Test',
                    'lname' => 'Yahala',
                    'gender' => 'male',
                    'dob' => '24-01-1996',
                    'address' => 'Lorem Ipsum',
                    'province' => 'Lorem Ipsum',
                    'city' => 'Lorem Ipsum',
                    'province_city' => 'Lorem Ipsum',
                    'country' => 'Lorem Ipsum',
                    'is_admin_user' => 0,
                    'is_superadmin' => 0,
                ]
            );
    }
}
