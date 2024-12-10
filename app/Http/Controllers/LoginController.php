<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\User;

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
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Mengambil data email dan password dari request
        $credentials = $request->only('email', 'password');

        // Mencoba login menggunakan data yang diberikan
        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->route('halamanutama');
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
            'no_telp' => 'required|string|max:15',
            'tgl_lahir' => 'required|date',
        ]);

        // Simpan ke session
        session(['step_one_data' => $validatedData]);

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
        // Validasi data dari step 2
        $validatedData = $request->validate([
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'umur' => 'required|integer|min:1',
            'alamat' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|in:SD,SLTP,SLTA,Perguruan Tinggi',
            'status_pernikahan' => 'required|in:Sudah,Belum,Cerai',
            'pekerjaan' => 'required|string|max:255',
            'penghasilan' => 'required|in:Rendah,Menengah,Tinggi',
            'tunjangan' => 'required|in:BPJS,Asuransi,Tidak Keduanya',
        ]);

        // Ambil data dari session step one
        $stepOneData = session('step_one_data');

        // Pastikan data dari step one ada
        if (!$stepOneData) {
            return redirect()
                ->route('register.step.one')
                ->withErrors('Lengkapi formulir langkah pertama terlebih dahulu.');
        }

        // Gabungkan data dari step one dan step two
        $userData = array_merge($stepOneData, $validatedData);

        try {
            // Pastikan kolom yang dikirimkan sesuai dengan nama kolom di tabel users
            User::create([
                'nama_depan' => $userData['namadepan'],
                'nama_belakang' => $userData['namabelakang'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'no_telp' => $userData['no_telp'],
                'tgl_lahir' => $userData['tgl_lahir'],
                'jenis_kelamin' => $userData['jenis_kelamin'],
                'umur' => $userData['umur'],
                'alamat' => $userData['alamat'],
                'pendidikan_terakhir' => $userData['pendidikan_terakhir'],
                'status_pernikahan' => $userData['status_pernikahan'],
                'pekerjaan' => $userData['pekerjaan'],
                'penghasilan' => $userData['penghasilan'],
                'tunjangan' => $userData['tunjangan'],
            ]);
            // Menampilkan pesan jika data berhasil disimpan
            //dd('Data berhasil disimpan');
        } catch (\Exception $e) {
            // Menangkap dan menampilkan error jika ada yang gagal
            // dd('Error:', $e->getMessage(), $userData);
            return redirect()
                ->back()
                ->withErrors('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }

        // Hapus session step_one_data setelah berhasil disimpan
        session()->forget('step_one_data');

        // Redirect ke halaman login atau sukses
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }
}
