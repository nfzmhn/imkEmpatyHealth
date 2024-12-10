<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User; // Import model User

class DiagnosaController extends Controller
{
    // Menampilkan halaman daftar diagnosa
    public function index()
    {
        return view('diagnosa');
    }

    // Menampilkan form pasien
    public function showForm($id)
    {
        // Cari data pasien, jika tidak ditemukan munculkan error 404
        $user = User::findOrFail($id);

        // Ambil data dokter yang sedang login
        $dokter = Auth::user();

        // Tanggal janji (bisa dari database atau default hari ini)
        $tanggalJanji = now()->format('d-m-Y');

        return view('form_pasien', compact('user', 'dokter', 'tanggalJanji'));
    }

    // Menyimpan diagnosa
    public function storeDiagnosa(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'diagnosa' => 'required|string|max:255',
        ]);

        // Cari data pasien
        $pasien = User::findOrFail($id);

        // Simpan diagnosa
        $pasien->diagnosa = $request->diagnosa;
        $pasien->save();

        return redirect()->route('diagnosa.index')->with('message', 'Diagnosa berhasil disimpan!');
    }
}
