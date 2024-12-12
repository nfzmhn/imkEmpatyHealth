<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\RiwayatUser;
use Illuminate\Support\Facades\Auth;

class RekamController extends Controller
{
    public function rekammedis()
    {
        // Ambil ID user yang sedang login
        $userId = Auth::id();

        // Ambil data riwayat medis dari tabel riwayat_user
        $riwayat = RiwayatUser::with([
            'reservasi.dokter.spesialis', // Relasi ke dokter dan spesialis
        ])->whereHas('reservasi', function ($query) use ($userId) {
            $query->where('id_user', $userId); // Hanya ambil data milik user yang login
        })->get();

        // Kirim data ke view
        return view('rekammedis', compact('riwayat'));
    }
}
