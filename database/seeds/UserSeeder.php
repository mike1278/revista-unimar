<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'User',
        ]);
		User::create([
            'name' => 'adriana',
            'lastname' => 'aguilar',
			'email' => 'adriana@mail.com',
			'password' => 'admin123',
            'role_id' => 1,
		]);
    }
}
