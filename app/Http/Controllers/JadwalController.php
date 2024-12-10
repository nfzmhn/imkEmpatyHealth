<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil data dokter spesialis beserta jadwalnya
        $dokterSpesialis = Dokter::whereHas('spesialis', function ($query) {
            $query->where('id_spesialis', '!=', 31);
        })->with('jadwals')->get();

        // Ambil data dokter umum (id_spesialis = 31) beserta jadwalnya
        $dokterUmum = Dokter::where('id_spesialis', 31)->with('jadwals')->get();

        return view('jadwal', compact('dokterSpesialis', 'dokterUmum'));
    }
}
    