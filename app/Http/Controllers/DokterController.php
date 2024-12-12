<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Spesialis;

class DokterController extends Controller
{
    public function pasiendokter()
    {
        // Ambil ID dokter yang sedang login dari session
        $dokterId = session('dokter_id');

        // Pastikan dokter_id tersedia di session
        if (!$dokterId) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil semua janji pasien yang terkait dengan dokter yang login
        $reservasi = Reservasi::with(['dokter.spesialis', 'user'])
            ->where('id_dokter', $dokterId)
            ->get();

        // Return data ke view
        return view('dokter', ['reservasi' => $reservasi]);
    }
}
