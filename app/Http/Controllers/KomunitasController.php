<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Forum;
use App\Models\RiwayatUser;

class KomunitasController extends Controller

{
    public function komunitasonline()
{

    // Ambil user yang sedang login
    $user = Auth::user();

    // Ambil semua forum berdasarkan spesialis dokter yang pernah dirawat user
    $forums = Forum::whereIn('id_spesialis', function ($query) use ($user) {
        $query->select('id_spesialis') // Ambil id_spesialis dari dokter
              ->from('dokters')
              ->whereIn('id', function ($subQuery) use ($user) {
                  $subQuery->select('id_dokter') // Ambil id_dokter dari reservasi
                           ->from('reservasi')
                           ->whereIn('id_reservasi', function ($innerQuery) use ($user) {
                               $innerQuery->select('id_reservasi') // Ambil id_reservasi dari riwayat_user
                                          ->from('riwayat_user')
                                          ->where('id_user', $user->id); // Filter berdasarkan user yang login
                           });
              });
    })->get();

    // Kirim data forum ke view
    return view('komunitasonline', compact('forums'));
}

}

