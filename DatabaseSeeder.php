<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Tambahkan model User

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Buat akun admin default
        User::create([
            'name' => 'Pemilik Kost',
            'email' => 'budi@example.com',
            'password' => Hash::make('password123') // Hash password agar terenkripsi
        ]);

        User::create([
            'name' => 'Admin Kost',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123') // Hash password agar terenkripsi
        ]);

        $this->call([
            KamarSeeder::class,
            UserSeeder::class,
            PembayaranSeeder::class,
        ]);
        // Jika ingin generate user dummy, uncomment baris di bawah
        // \App\Models\User::factory(10)->create();
    }
}
