<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpesialisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spesialis')->insert([
            ['id_spesialis' => 1, 'nama_spesialis' => 'Penyakit Dalam (Sp.PD)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 2, 'nama_spesialis' => 'Kedokteran Umum (Sp.KU)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 3, 'nama_spesialis' => 'Anak (Sp.A)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 4, 'nama_spesialis' => 'Bedah (Sp.B)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 5, 'nama_spesialis' => 'Kejiwaan (Sp.Kj)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 6, 'nama_spesialis' => 'Mata (Sp.M)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 7, 'nama_spesialis' => 'Saraf/Neurologi (Sp.N)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 8, 'nama_spesialis' => 'Kulit/Dermatologi (Sp.DV)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 9, 'nama_spesialis' => 'Telinga-Hidung-Tenggorokan dan Kepala-Leher (Sp.THT-KL)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 10, 'nama_spesialis' => 'Kedokteran Gigi (Sp.KG)','created_at' => now(),
            'updated_at' => now(),],
        ]);
    }
}
