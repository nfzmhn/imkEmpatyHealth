<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Dokter;
use App\Models\Spesialis;
use App\Models\User;
use App\Models\Reservasi;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    // Menampilkan halaman buat janji
    public function index(Request $request)
    {
        // Ambil data user yang sedang login
        $user = auth()->user();

        // Ambil semua data spesialis
        $spesialis = Spesialis::all();

        // Ambil data dokter berdasarkan spesialis yang dipilih
        $dokters = [];
        if ($request->has('spesialis_id') && $request->get('spesialis_id')) {
            $dokters = Dokter::where('id_spesialis', $request->get('spesialis_id'))->get();
        }

        // Ambil jadwal dokter
        $jadwals = [];
        if (!empty($dokters)) {
            $jadwals = JadwalDokter::whereIn('id_dokter', $dokters->pluck('id'))->get();
        }

        // Return ke view
        return view('janji', compact('spesialis', 'dokters', 'jadwals'));
    }

    // Fungsi untuk mengambil data dokter via AJAX
    public function getDokters(Request $request)
    {
        $spesialisId = $request->get('spesialis_id');

        if (!$spesialisId) {
            return response()->json([], 400);
        }

        $dokters = Dokter::where('id_spesialis', $spesialisId)->get();

        if ($dokters->isEmpty()) {
            return response()->json([], 404);
        }

        Log::info('Dokters fetched:', $dokters->toArray());
        return response()->json($dokters);
    }

    // Fungsi untuk mengambil data jadwal dokter via AJAX
    public function getJadwalDokter(Request $request)
    {
        $dokterId = $request->get('dokter_id');

        if (!$dokterId) {
            return response()->json([], 400);
        }

        $jadwals = JadwalDokter::where('id_dokter', $dokterId)->get();

        if ($jadwals->isEmpty()) {
            return response()->json([], 404);
        }

        Log::info('Jadwals fetched:', $jadwals->toArray());
        return response()->json($jadwals);
    }

    // Menyimpan data reservasi baru
    public function store(Request $request)
    {
        Log::info('Input diterima:', $request->all());

        // Validasi input
        $validated = $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'jadwal_id' => 'required|exists:jadwal_dokters,id_jadwal_dokter',
            'keluhan' => 'required|string|max:255',
        ]);

        Log::info('Data tervalidasi:', $validated);

        try {
            Reservasi::create([
                'id_user' => auth()->id(), // Ambil ID user yang sedang login
                'id_dokter' => $validated['dokter_id'],
                'id_jadwal_dokter' => $validated['jadwal_id'],
                'keluhan' => $validated['keluhan'],
            ]);

            Log::info('Reservasi berhasil dibuat.');
            return redirect()->route('halamanutama');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan reservasi:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Terjadi kesalahan. Silakan coba lagi.'], 500);
        }
    }
}
