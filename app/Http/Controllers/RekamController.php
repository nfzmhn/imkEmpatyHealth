<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\RiwayatUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekamController extends Controller
{
    /**
     * Menampilkan data rekam medis user yang sedang login.
     */
    public function rekammedis()
    {
        // Ambil ID user yang sedang login
        $userId = Auth::id();

        // Ambil semua forum dari database
        $forum = Forum::all(); // Pastikan data ini ada di tabel 'forum'

        // Ambil data riwayat medis berdasarkan user yang sedang login dan urutkan berdasarkan waktu
        $riwayat = RiwayatUser::with([
            'reservasi.dokter.spesialis.forum', // Pastikan forum ikut dimuat
        ])
        ->where('id_user', $userId) // Filter berdasarkan user yang login
        ->orderBy('created_at', 'desc')
        ->get();


        // Kirim data ke view
        return view('rekammedis', compact('riwayat', 'forum'));
    }

    /**
     * Menampilkan forum online yang relevan berdasarkan riwayat medis user.
     */
    public function komunitasOnline()
    {
        // Ambil ID user yang sedang login
        $userId = Auth::id();

        // Ambil data riwayat medis berdasarkan user yang sedang login
        $riwayat = RiwayatUser::with(['reservasi.dokter.spesialis']) // Eager load relasi ke dokter dan spesialis
            ->where('id_user', $userId) // Filter data untuk user yang login
            ->get();

        // Ambil semua ID spesialis dari riwayat medis yang dimiliki user
        $spesialisIds = $riwayat
            ->map(function ($item) {
                return $item->reservasi->dokter->spesialis->id_spesialis ?? null;
            })
            ->filter() // Hapus nilai null
            ->unique(); // Ambil nilai unik saja

        // Ambil forum yang memiliki id_spesialis yang sesuai dengan riwayat medis user
        $forum = Forum::whereIn('id_spesialis', $spesialisIds)->get();

        // Kirim data forum ke view
        return view('komunitasonline', compact('forum'));
    }
}
