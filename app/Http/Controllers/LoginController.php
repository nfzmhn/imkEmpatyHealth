<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function beranda(Request $request)
    {
        // Validasi input email dan password
        $request->validate([
            'email' => 'required|email', // Menambahkan validasi format email
            'password' => 'required|min:6', // Menambahkan minimal panjang password
        ]);

        // Mengambil data email dan password dari request
        $credentials = $request->only('email', 'password');

        // Mencoba login menggunakan data yang diberikan
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Login berhasil
            return view('halamanutama');
        } else {
            // Login gagal
            return redirect()->route('login')->withErrors([
                'login_failed' => 'Email atau Password salah',
            ]);
        }
    }

    public function register()
    {
        return view('daftar');
    }

    public function saveStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'namadepan' => 'required|string|max:255',
            'namabelakang' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'no_hp' => 'required|string|max:15',
            'tgl_lahir' => 'required|date',
        ]);

        // Simpan ke session
        session(['step_one_data' => $validatedData]);

        // Cek session untuk debugging
        dd(session()->all()); // Pastikan data disimpan dengan benar di session

        // Redirect ke route datadiri
        return redirect()->route('datadiri');
    }


    public function data_diri()
    {
        return view('datadiri');
    }


    // Simpan data lengkap ke database
    public function saveStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'umur' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'pendidikan_terakhir' => 'required|in:SD,SLTP,SLTA,Perguruan Tinggi',
            'status_pernikahan' => 'required|in:Sudah,Belum,Cerai',
            'pekerjaan' => 'required|string',
            'penghasilan' => 'required|in:Rendah,Menengah,Atas',
            'tunjangan' => 'required|in:BPJS,Asuransi,Tidak Keduanya',
        ]);

        // Ambil data dari session
        $stepOneData = session('step_one_data');

        if (!$stepOneData) {
            return redirect()->route('register.step.one')->withErrors('Lengkapi formulir pertama terlebih dahulu.');
        }

        // Gabungkan data dari kedua step
        $userData = array_merge($stepOneData, $validatedData);
        $userData['password'] = Hash::make($userData['password']); // Hash password

        // Simpan ke database
        User::create($userData);

        // Hapus session
        session()->forget('step_one_data');

        // Redirect ke halaman sukses
        return redirect()->route('register.success');
    }
}
