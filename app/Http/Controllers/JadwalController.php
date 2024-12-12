<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil data dokter spesialis (id_spesialis selain 2) beserta jadwalnya
        $dokterSpesialis = Dokter::whereHas('spesialis', function ($query) {
            $query->where('id_spesialis', '!=', 2);
        })->with(['spesialis', 'jadwals'])->get();

        // Ambil data dokter umum (id_spesialis = 2) beserta jadwalnya
        $dokterUmum = Dokter::whereHas('spesialis', function ($query) {
            $query->where('id_spesialis', 2);
        })->with(['spesialis', 'jadwals'])->get();

        return view('jadwal', compact('dokterSpesialis', 'dokterUmum'));
    }
}
