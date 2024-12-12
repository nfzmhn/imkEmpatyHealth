<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalDoktersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_dokters')->delete();
        DB::table('jadwal_dokters')->insert([
            //id spesialis 1
            [
                'id_dokter' => 1,
                'nama_jadwal' => 'Rabu', // Random hari
                'durasi_tindakan' => 240, // 240 menit = 4 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 2,
                'nama_jadwal' => 'Senin', // Random hari
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 3,
                'nama_jadwal' => 'Jumat', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '09:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 4,
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 90, // 90 menit = 1.5 jam
                'jadwal' => '15:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 5,
                'nama_jadwal' => 'Selasa', // Random hari
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '18:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // id spesialis 2
            [
                'id_dokter' => 6,
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '09:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 7,
                'nama_jadwal' => 'Rabu', // Random hari
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '13:30:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 8,
                'nama_jadwal' => 'Jumat', // Random hari
                'durasi_tindakan' => 90, // 90 menit = 1.5 jam
                'jadwal' => '16:30:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 9,
                'nama_jadwal' => 'Senin', // Random hari
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 10,
                'nama_jadwal' => 'Selasa', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '12:30:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // id spesialis 3
            [
                'id_dokter' => 11, // Dr. Andini Maharani
                'nama_jadwal' => 'Rabu', // Random hari
                'durasi_tindakan' => 180, // 3 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 12, // Dr. Raditya Pranata
                'nama_jadwal' => 'Senin', // Random hari
                'durasi_tindakan' => 120, // 2 jam
                'jadwal' => '09:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 13, // Dr. Farah Kusuma
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 90, // 1.5 jam
                'jadwal' => '13:30:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 14, // Dr. Fadli Ramadhan
                'nama_jadwal' => 'Selasa', // Random hari
                'durasi_tindakan' => 150, // 2.5 jam
                'jadwal' => '08:30:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 15, // Dr. Melati Anindya
                'nama_jadwal' => 'Jumat', // Random hari
                'durasi_tindakan' => 180, // 3 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // id 4
            [
                'id_dokter' => 16, // ID dokter sesuai urutan pada tabel 'dokters'
                'nama_jadwal' => 'Rabu', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 17,
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 240, // 240 menit = 4 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 18,
                'nama_jadwal' => 'Senin', // Random hari
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '19:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        
            // id 5
            [
                'id_dokter' => 19,
                'nama_jadwal' => 'Selasa', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 20,
                'nama_jadwal' => 'Senin', // Random hari
                'durasi_tindakan' => 240, // 240 menit = 4 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 21,
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '19:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 22,
                'nama_jadwal' => 'Jumat', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '09:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 23,
                'nama_jadwal' => 'Rabu', // Random hari
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            // id 6
            [
                'id_dokter' => 24,
                'nama_jadwal' => 'Selasa', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 25,
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 240, // 240 menit = 4 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 26,
                'nama_jadwal' => 'Sabtu ', // Random hari
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '19:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 7
            [
                'id_dokter' => 27, // Dr. Arif Budiman
                'nama_jadwal' => 'Selasa', // Random hari
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 28, // Dr. Dina Santoso
                'nama_jadwal' => 'Kamis', // Random hari
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 29, // Dr. Rizky Hartono
                'nama_jadwal' => 'Minggu', // Random hari
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '18:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // 8
            [
                'id_dokter' => 30,
                'nama_jadwal' => 'Senin',
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 31,
                'nama_jadwal' => 'Rabu',
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 32,
                'nama_jadwal' => 'Jumat',
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '15:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],        
            //9
            [
                'id_dokter' => 33,
                'nama_jadwal' => 'Senin',
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 34,
                'nama_jadwal' => 'Selasa',
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 35,
                'nama_jadwal' => 'Kamis',
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '19:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //10
            [
                'id_dokter' => 36,
                'nama_jadwal' => 'Senin',
                'durasi_tindakan' => 180, // 180 menit = 3 jam
                'jadwal' => '08:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 37,
                'nama_jadwal' => 'Rabu',
                'durasi_tindakan' => 120, // 120 menit = 2 jam
                'jadwal' => '13:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_dokter' => 38,
                'nama_jadwal' => 'Jumat',
                'durasi_tindakan' => 150, // 150 menit = 2.5 jam
                'jadwal' => '15:00:00', // Jam operasional
                'created_at' => now(),
                'updated_at' => now(),
            ],           
        ]);
    }
}
