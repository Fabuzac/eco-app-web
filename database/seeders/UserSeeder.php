<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
        User::create([
            'name' => 'UserTest',
            'email' => 'test@test.com',
            'bio' => 'Admin',
            'password' => Hash::make('123456789'),
        ]);
    }
}