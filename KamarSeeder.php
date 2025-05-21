<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    public function run()
    {
        DB::table('kamars')->insert([
            ['nama_kamar' => 'Kamar A1', 'status' => 'kosong', 'jenis_kosan' => 'putra'],
            ['nama_kamar' => 'Kamar A2', 'status' => 'terisi', 'jenis_kosan' => 'putri'],
            ['nama_kamar' => 'Kamar B1', 'status' => 'kosong', 'jenis_kosan' => 'campur'],
            ['nama_kamar' => 'Kamar B2', 'status' => 'terisi', 'jenis_kosan' => 'putra'],
        ]);
    }
}

