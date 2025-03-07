<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            User::updateOrCreate(['email' => 'example'.$i.'@gmail.com'],
                [
                    'name' => 'john'.$i,
                    'email' => 'example'.$i.'@gmail.com',
                    'password' => Hash::make('123456'),
                    'image' => 'https://www.w3schools.com/w3images/avatar2.png',
                    'status' => 1,
                    'level' => 0,
                    'username' => 'john'.$i,
                    'fname' => 'John'.$i,
                    'lname' => 'Doe'.$i,
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
}
