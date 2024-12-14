<?php

namespace App\Http\Controllers;

use App\Models\RiwayatUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekamController extends Controller
{
    public function rekammedis()
    {
        // Ambil ID user yang sedang login
        $userId = Auth::id();

        // Ambil data riwayat medis berdasarkan user yang sedang login dan urutkan berdasarkan waktu
        $riwayat = RiwayatUser::with([
            'reservasi.dokter.spesialis', // Relasi ke dokter dan spesialis
        ])
        ->whereHas('reservasi', function ($query) use ($userId) {
            $query->where('id_user', $userId); // Hanya ambil data milik user yang login
        })
        ->orderBy('created_at', 'desc') // Urutkan berdasarkan waktu dibuat
        ->get();

        // Kirim data ke view
        return view('rekammedis', compact('riwayat'));
    }
}
