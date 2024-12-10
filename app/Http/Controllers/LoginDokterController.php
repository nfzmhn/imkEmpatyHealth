<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;


class LoginDokterController extends Controller
{
    public function showLoginForm()
    {
        return view('logindokter'); // Menampilkan halaman login dokter
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Periksa email di database
        $dokter = Dokter::where('email', $request->email)->first();
    
        if ($dokter && $request->password == $dokter->password) {
            // Simpan data ke session setelah login berhasil
            session([
                'dokter_id' => $dokter->id,
                'dokter_nama' => $dokter->nama,
                'dokter_alamat' => $dokter->alamat,
            ]);
    
            // Login berhasil, arahkan ke halaman dokter
            return redirect()->route('dokter');
        } else {
            // Gagal login
            return back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }
    

}
