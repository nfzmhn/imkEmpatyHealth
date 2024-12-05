<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Tambahkan ini untuk mengakses data pengguna yang sedang login

class UserController extends Controller
{
    public function profil()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Kirim data pengguna ke view profileuser
        return view('profileuser', compact('user'));
    }

    public function logout()
    {
        // Proses logout
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect()->route('login');
    }
}
