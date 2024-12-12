<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\ChatboxController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\LoginDokterController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RekamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman utama
Route::get('/', function () {
    return view('index');
});

// Login dan Register
Route::post('/beranda', [LoginController::class, 'beranda'])->name('login.proses');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/daftar', [LoginController::class, 'register'])->name('register');
Route::post('/datadiri', [LoginController::class, 'saveStepOne'])->name('register.step.one.post');
Route::post('/login', [LoginController::class, 'saveStepTwo'])->name('register.step.two');
Route::get('/datadiri', [LoginController::class, 'data_diri'])->name('datadiri');
Route::post('/logindokter', [LoginDokterController::class, 'login'])->name('dokter.login');
Route::get('/logindokter', [LoginDokterController::class, 'showLoginForm'])->name('dokter.loginForm');
Route::get('/views/dokter', [DokterController::class, 'pasiendokter'])->name('dokter');
Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa');



// Halaman utama setelah login
Route::get('/halaman-utama', [HalamanUtamaController::class, 'halamanutama'])->middleware('auth')->name('halamanutama');

// Layanan
Route::get('/layanan', [ServiceController::class, 'index'])->name('layanan');

// Profil User
Route::get('/profileuser', [ProfileController::class, 'index'])->name('profileuser');
Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');

// Reservasi Janji Dokter
Route::get('/janji', [ReservasiController::class, 'index'])->name('reservasi.index')->middleware('auth'); // Halaman reservasi
Route::post('/janji', [ReservasiController::class, 'store'])->name('reservasi.store')->middleware('auth'); // Simpan reservasi
Route::get('/get-dokters', [ReservasiController::class, 'getDokters'])->name('reservasi.getDokters')->middleware('auth'); // Data dokter via AJAX
Route::get('/get-jadwal-dokter', [ReservasiController::class, 'getJadwalDokter']);

// Jadwal Dokter
Route::get('/jadwal-dokter', [JadwalController::class, 'index'])->name('jadwal.dokter');

// Rekam Medis
Route::get('/rekam-medis', [RekamController::class, 'rekammedis'])->name('rekammedis');

// Komunitas Online
Route::get('/komunitas-online', [KomunitasController::class, 'komunitasonline'])->name('komunitasonline');

// Informasi
Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi');

// Chatbox
Route::get('/chat-box', [ChatboxController::class, 'chatbox'])->name('chatbox');
Route::get('/group-chat', [ChatboxController::class, 'showChatbox'])->name('group-chat');
Route::post('/group-chat/send', [ChatboxController::class, 'sendMessage'])->name('group-chat.send');

Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa.index');
Route::get('/diagnosa/{id}', [DiagnosaController::class, 'show'])->name('diagnosa.show');
Route::get('/form-pasien/{id}', [DiagnosaController::class, 'showForm'])->name('form.pasien');
Route::post('/diagnosa/store/{id}', [DiagnosaController::class, 'store'])->name('diagnosa.store');
