<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RiwayatUser;
use App\Models\User; // Import model User

class DiagnosaController extends Controller
{
    // Menampilkan halaman daftar diagnosa
    public function index()
    {
        return view('diagnosa');
    }

    // Menampilkan form pasien
    public function show($id)
    {
        $reservasi = Reservasi::with('user', 'dokter.spesialis')->findOrFail($id);
        return view('diagnosa', compact('reservasi'));
    }

    // Menyimpan diagnosa
    public function store(Request $request, $id)
    {
        // Validasi input diagnosa
        $request->validate([
            'diagnosa' => 'required|string|max:255',
        ]);

        // Ambil data reservasi berdasarkan ID
        $reservasi = Reservasi::findOrFail($id);

        // Simpan diagnosa ke tabel riwayat_user
        RiwayatUser::create([
            'id_reservasi' => $reservasi->id_reservasi,
            'diagnosa' => $request->input('diagnosa'),
        ]);

        // Redirect atau berikan respons setelah data disimpan
        return redirect()->route('dokter');
    }
}
