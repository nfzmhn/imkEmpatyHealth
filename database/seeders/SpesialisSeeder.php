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
            ['id_spesialis' => 2, 'nama_spesialis' => 'Obstetri dan Ginekologi (Sp.OG)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 3, 'nama_spesialis' => 'Anak (Sp.A)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 4, 'nama_spesialis' => 'Bedah (Sp.B)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 5, 'nama_spesialis' => 'Anestesi (Sp.An)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 6, 'nama_spesialis' => 'Mata (Sp.M)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 7, 'nama_spesialis' => 'Saraf/Neurologi (Sp.N)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 8, 'nama_spesialis' => 'Kulit/Dermatologi (Sp.DV)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 9, 'nama_spesialis' => 'Telinga-Hidung-Tenggorokan dan Kepala-Leher (Sp.THT-KL)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 10, 'nama_spesialis' => 'Radiologi (Sp.Rad)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 11, 'nama_spesialis' => 'Pulmonologi (Sp.Pul)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 12, 'nama_spesialis' => 'Kardiologi (Sp.K)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 13, 'nama_spesialis' => 'Nefrologi (Sp.Nef)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 14, 'nama_spesialis' => 'Endokrinologi (Sp.End)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 15, 'nama_spesialis' => 'Gastroenterologi (Sp.G)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 16, 'nama_spesialis' => 'Hematologi (Sp.H)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 17, 'nama_spesialis' => 'Dermatologi (Sp.D)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 18, 'nama_spesialis' => 'Otolaringologi (Sp.ORL)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 19, 'nama_spesialis' => 'Oftalmologi (Sp.Oft)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 20, 'nama_spesialis' => 'Neurologi (Sp.N)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 21, 'nama_spesialis' => 'Orthopedi (Sp.Or)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 22, 'nama_spesialis' => 'Urologi (Sp.U)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 23, 'nama_spesialis' => 'Kedokteran Forensik (Sp.F)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 24, 'nama_spesialis' => 'Kedokteran Olahraga (Sp.KO)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 25, 'nama_spesialis' => 'Kedokteran Tropis (Sp.KT)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 26, 'nama_spesialis' => 'Kedokteran Nuklir (Sp.KN)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 27, 'nama_spesialis' => 'Kedokteran Rehabilitasi (Sp.KR)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 28, 'nama_spesialis' => 'Kedokteran Gigi (Sp.KG)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 29, 'nama_spesialis' => 'Kedokteran Hewan (Sp.KH)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 30, 'nama_spesialis' => 'Kedokteran Kesehatan Masyarakat (Sp.KM)','created_at' => now(),
            'updated_at' => now(),],
            ['id_spesialis' => 31, 'nama_spesialis' => 'Kedokteran Umum (Sp.KU)','created_at' => now(),
            'updated_at' => now(),],
        ]);
    }
}
