<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Admin', 'email' => 'admin@example.com', 'admin123' => Hash::make('password'), 'role' => 'admin'],
            ['name' => 'Budi', 'email' => 'budi@example.com', 'password123' => Hash::make('password'), 'role' => 'penghuni'],
        ]);
    }
}
