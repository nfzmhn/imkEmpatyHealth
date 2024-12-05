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
        $dokters = Dokter::where('id_spesialis', $request->get('spesialis_id'))->get();
        Log::info('Dokters fetched:', $dokters->toArray());
        Log::info('Spesialis ID:', $request->get('spesialis_id'));
        return response()->json($dokters);
    }

    // Menyimpan data reservasi baru
    public function store(Request $request)
    {
        Log::info('Input diterima:', $request->all());
    
        $validated = $request->validate([
            'id_user'      => 'required|exists:users,id',
            'id_dokter'    => 'required|exists:dokters,id',
            'id_jadwal_dokter' => 'required|exists:jadwal_dokters,id',
            'keluhan'      => 'required|string',
        ]);
    
        Log::info('Data tervalidasi:', $validated);
    
        try {
            Reservasi::create([
                'id_user' => $request->id_user,
                'id_dokter' => $request->id_dokter,
                'id_jadwal_dokter' => $request->id_jadwal_dokter,
                'keluhan' => $request->keluhan,
            ]);
            return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dibuat!');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan reservasi:', ['error' => $e->getMessage()]);
            return back()->withErrors('Terjadi kesalahan. Silakan coba lagi.');
        }
    }    
    
    // Fungsi untuk menghitung skor kecocokan dokter dan user
    private function getMatchingScore(Dokter $dokter, User $user)
    {
        $score = 1; // Nilai dasar 1 agar dokter tetap muncul walaupun tidak ada kesamaan

        // Bandingkan umur
        if (abs($dokter->umur - $user->umur) <= 5) {
            $score++;
        }

        // Bandingkan jenis kelamin
        if ($dokter->jenis_kelamin == $user->jenis_kelamin) {
            $score++;
        }

        // Bandingkan status pernikahan
        if ($dokter->status_pernikahan == $user->status_pernikahan) {
            $score++;
        }

        // Bandingkan alamat
        $dokter_kota = $this->extractCity($dokter->alamat);
        $user_kota = $this->extractCity($user->alamat);
        if ($dokter_kota == $user_kota) {
            $score++;
        }

        // Bandingkan latar belakang ekonomi
        if ($dokter->latar_belakang == $user->penghasilan) {
            $score++;
        }

        return $score;
    }

    // Fungsi untuk mengekstrak kota dari alamat
    private function extractCity($address)
    {
        $address_parts = explode(',', $address);
        $city = trim(end($address_parts));
        return $city;
    }
}
