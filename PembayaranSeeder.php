<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('pembayarans')->insert([
            ['penghuni_id' => 2, 'jumlah' => 500000, 'status' => 'lunas', 'created_at' => now()],
            ['penghuni_id' => 2, 'jumlah' => 500000, 'status' => 'pending', 'created_at' => now()],
        ]);
    }
}

