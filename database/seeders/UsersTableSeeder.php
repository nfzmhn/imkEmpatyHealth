<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama_depan' => 'Eko',
                'nama_belakang' => 'Prasetyo',
                'no_telp' => '081234567890',
                'umur' => 28,
                'alamat' => 'Jl. Merdeka, Jakarta, Indonesia',
                'pendidikan_terakhir' => 'Perguruan Tinggi',
                'status_pernikahan' => 'Belum',
                'pekerjaan' => 'Software Engineer',
                'penghasilan' => 'Atas',
                'tunjangan' => 'BPJS',
                'email' => 'eko@example.com',
                'password' => Hash::make('password123'),
                'jenis_kelamin' => 'Laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => 'Siti',
                'nama_belakang' => 'Rahmawati',
                'no_telp' => '081234567891',
                'umur' => 32,
                'alamat' => 'Jl. Sudirman, Bandung, Indonesia',
                'pendidikan_terakhir' => 'SLTA',
                'status_pernikahan' => 'Sudah',
                'pekerjaan' => 'Guru',
                'penghasilan' => 'Menengah',
                'tunjangan' => 'Asuransi',
                'email' => 'siti@example.com',
                'password' => Hash::make('password456'),
                'jenis_kelamin' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
