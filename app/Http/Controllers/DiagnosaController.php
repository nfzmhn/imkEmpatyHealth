<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\RiwayatUser;

class DiagnosaController extends Controller
{
    // Menampilkan halaman daftar diagnosa (hanya pasien yang belum didiagnosa)
    public function index()
    {
        $reservasi = Reservasi::with('user', 'dokter.spesialis')
            ->get()
            ->filter(function ($item) {
                // Cek apakah diagnosa sudah diinput
                $sudahDiagnosa = RiwayatUser::where('id_reservasi', $item->id_reservasi)->exists();
                return !$sudahDiagnosa; // Hanya tampilkan pasien yang belum diinput diagnosanya
            });

        return view('dokter', compact('reservasi'));
    }

    // Menampilkan form input diagnosa
    public function show($id)
    {
        $reservasi = Reservasi::with('user', 'dokter.spesialis')->findOrFail($id);
        return view('diagnosa', compact('reservasi'));
    }

    // Menyimpan diagnosa dan menghapus pasien dari daftar dokter
    public function store(Request $request, $id)
    {
        // Validasi input diagnosa
        $request->validate([
            'diagnosa' => 'required|string|max:255',
        ]);

        // Ambil data reservasi berdasarkan ID
        $reservasi = Reservasi::findOrFail($id);

        // Log data reservasi untuk debugging
        Log::info("Reservasi ditemukan: ", $reservasi->toArray());

        // Validasi data user dan dokter
        if (!$reservasi->id_user || !$reservasi->id_dokter) {
            Log::error("Data user atau dokter tidak ditemukan untuk reservasi ID: " . $reservasi->id_reservasi);
            return back()->with('error', 'Data user atau dokter tidak ditemukan.');
        }

        // Proses transaksi penyimpanan diagnosa
        try {
            DB::transaction(function () use ($reservasi, $request) {
                // Log sebelum insert ke tabel riwayat_user
                Log::info("Menyimpan ke riwayat_user: ", [
                    'id_reservasi' => $reservasi->id_reservasi,
                    'id_user' => $reservasi->id_user,
                    'id_dokter' => $reservasi->id_dokter,
                    'diagnosa' => $request->diagnosa,
                ]);
        
                // Simpan diagnosa
                RiwayatUser::create([
                    'id_reservasi' => $reservasi->id_reservasi,
                    'id_user' => $reservasi->id_user,
                    'id_dokter' => $reservasi->id_dokter,
                    'diagnosa' => $request->diagnosa,
                ]);
        
                // Log setelah insert
                Log::info("Data berhasil disimpan ke tabel riwayat_user.");
        
                // Tandai reservasi sudah didiagnosa
                $reservasi->update(['sudah_diagnosa' => true]);
            });
            return redirect()->route('dokter.pasiendokter')->with('success', 'Diagnosa berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error("Error saat menyimpan diagnosa: " . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat menyimpan diagnosa.');
        }
    }        
}
