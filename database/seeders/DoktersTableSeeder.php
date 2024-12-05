<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoktersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->delete();
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. Budi Santoso',
                'alamat' => 'Jl. Mawar No. 123, Jakarta',
                'umur' => 45,
                'jenis_kelamin' => 'Laki-laki',
                'status_pernikahan' => 'Sudah',
                'latar_belakang' => 'Atas',
                'id_spesialis' => 1, // Asumsi ID spesialis valid di tabel spesialis
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dr. Sari Pertiwi',
                'alamat' => 'Jl. Melati No. 456, Bandung',
                'umur' => 38,
                'jenis_kelamin' => 'Perempuan',
                'status_pernikahan' => 'Sudah',
                'latar_belakang' => 'Menengah',
                'id_spesialis' => 2, // Asumsi ID spesialis valid di tabel spesialis
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dr. Andi Wijaya',
                'alamat' => 'Jl. Anggrek No. 789, Surabaya',
                'umur' => 50,
                'jenis_kelamin' => 'Laki-laki',
                'status_pernikahan' => 'Cerai',
                'latar_belakang' => 'Atas',
                'id_spesialis' => 1, // Asumsi ID spesialis valid di tabel spesialis
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
