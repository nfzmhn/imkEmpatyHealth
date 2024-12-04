<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use App\Models\User;
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
        \Log::info('Dokters fetched:', $dokters->toArray());
        \Log::info('Spesialis ID:', $request->get('spesialis_id'));
        return response()->json($dokters);
    }

    // Menyimpan data reservasi baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'spesialis_id' => 'required|exists:spesialis,id_spesialis',
            'dokter_id'    => 'required|exists:dokters,id',
            'jadwal_id'    => 'required|exists:jadwal_dokters,id_jadwal_dokter',
            'tanggal'      => 'required|date',
            'keluhan'      => 'required|string',
        ]);

        // Simpan data reservasi
        $reservasi = new Reservasi();
        $reservasi->id_user = auth()->id(); // Ambil ID user yang sedang login
        $reservasi->id_dokter = $request->dokter_id;
        $reservasi->id_jadwal_dokter = $request->jadwal_id;
        $reservasi->tanggal = $request->tanggal;
        $reservasi->keluhan = $request->keluhan;
        $reservasi->save();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dibuat!');
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
