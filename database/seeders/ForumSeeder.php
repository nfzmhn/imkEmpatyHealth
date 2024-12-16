<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('forum')->insert([
            [
                'nama_forum' => 'Forum Penyakit Dalam (Sp.PD)',
                'id_spesialis' => 1,
                'deskripsi' => 'Forum untuk diskusi mengenai penyakit dalam dan berbagai solusi medis terkait.',
                'whatsapp_link' => 'https://chat.whatsapp.com/CIaaVyHCs7U1xpx58ChPOl',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Kedokteran Umum (Sp.KU)',
                'id_spesialis' => 2,
                'deskripsi' => 'Forum untuk membahas berbagai masalah kesehatan umum yang sering dihadapi masyarakat.',
                'whatsapp_link' => 'https://chat.whatsapp.com/FXSTEqCeiL3473CveQafGy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Anak (Sp.A)',
                'id_spesialis' => 3,
                'deskripsi' => 'Forum untuk orang tua dan dokter spesialis anak yang membahas kesehatan anak-anak.',
                'whatsapp_link' => 'https://chat.whatsapp.com/Jzaks7NBOUF2351dDVhASp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Bedah (Sp.B)',
                'id_spesialis' => 4,
                'deskripsi' => 'Forum untuk berdiskusi mengenai berbagai jenis prosedur bedah dan solusi medis terkait.',
                'whatsapp_link' => 'https://chat.whatsapp.com/ILib6VbyvDG4UFYzfF7QXI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Kejiwaan (Sp.Kj)',
                'id_spesialis' => 5,
                'deskripsi' => 'Forum untuk membahas masalah kesehatan mental dan berbagai terapi yang bisa dilakukan.',
                'whatsapp_link' => 'https://chat.whatsapp.com/LNHNstftkvk1OBexwJ3yM0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Mata (Sp.M)',
                'id_spesialis' => 6,
                'deskripsi' => 'Forum untuk diskusi tentang kesehatan mata dan penanganan penyakit mata.',
                'whatsapp_link' => 'https://chat.whatsapp.com/DrU3EHJ3mONFQVzXtLOr5P',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Saraf/Neurologi (Sp.N)',
                'id_spesialis' => 7,
                'deskripsi' => 'Forum untuk berdiskusi mengenai gangguan saraf dan neurologi.',
                'whatsapp_link' => 'https://chat.whatsapp.com/FHqNHNOKyAh7xX6Kd5UeBm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Kulit/Dermatologi (Sp.DV)',
                'id_spesialis' => 8,
                'deskripsi' => 'Forum yang membahas masalah kulit dan gangguan dermatologi.',
                'whatsapp_link' => 'https://chat.whatsapp.com/HRO4CP5kNqQ9edpTn5YAbD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Telinga-Hidung-Tenggorokan dan Kepala-Leher (Sp.THT-KL)',
                'id_spesialis' => 9,
                'deskripsi' => 'Forum yang membahas masalah kesehatan THT dan berbagai terapi terkait.',
                'whatsapp_link' => 'https://chat.whatsapp.com/HoTPpWCyC1n3bc64QOjtXk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_forum' => 'Forum Kedokteran Gigi (Sp.KG)',
                'id_spesialis' => 10,
                'deskripsi' => 'Forum untuk berdiskusi mengenai kesehatan gigi dan perawatan gigi.',
                'whatsapp_link' => 'https://chat.whatsapp.com/J99dYd28Ffy8KAZNRODE9i',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
