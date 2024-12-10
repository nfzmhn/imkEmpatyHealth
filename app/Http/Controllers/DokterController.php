<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservasi;

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
        $reservasi = Reservasi::join('users', 'reservasi.id_user', '=', 'users.id')
            ->join('dokters', 'reservasi.id_dokter', '=', 'dokters.id')
            ->join('spesialis', 'dokters.id_spesialis', '=', 'spesialis.id_spesialis')
            ->where('dokters.id', $dokterId) // Filter berdasarkan ID dokter yang login
            ->selectRaw("
                CONCAT(users.nama_depan, ' ', users.nama_belakang) as nama_pasien, 
                dokters.nama as nama_dokter, 
                spesialis.nama_spesialis as nama_spesialis, 
                reservasi.keluhan, 
                reservasi.created_at
            ")
            ->get();
    
        // Return data ke view
        return view('dokter', compact('reservasi'));
    }
    

}