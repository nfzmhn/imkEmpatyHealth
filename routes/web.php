<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\ChatboxController;
use App\Http\Controllers\ReservasiController;


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




Route::get('/', function () {
    return view('index');
});

Route::post('/beranda', [LoginController::class, 'beranda'])->name('login.proses');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/daftar', [LoginController::class, 'register'])->name('register');
Route::post('/datadiri', [LoginController::class, 'saveStepOne'])->name('register.step.one.post');
Route::post('/login', [LoginController::class, 'saveStepTwo'])->name('register.step.two');
Route::get('/datadiri', [LoginController::class, 'data_diri'])->name('datadiri');

Route::get('/halaman-utama', [HalamanUtamaController::class, 'halamanutama'])->middleware('auth')->name('halamanutama');


Route::get('/layanan', [ServiceController::class, 'index'])->name('layanan');

Route::get('/profileuser', [ProfileController::class, 'index'])->name('profileuser');
Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');

Route::get('/get-dokters', [ReservasiController::class, 'getDokters'])->name('getDokters');
Route::get('/janji', [ReservasiController::class, 'index'])->name('reservasi.index');
Route::post('/janji', [ReservasiController::class, 'store'])->name('reservasi.store');

Route::get('/jadwal-dokter', [JadwalController::class, 'jadwal'])->name('jadwal');
Route::get('/rekam-medis', [RekamController::class, 'rekammedis'])->name('rekammedis');

Route::get('/komunitas-online', [KomunitasController::class, 'komunitasonline'])->name('komunitasonline');

Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi');

Route::get('/chat-box', [ChatboxController::class, 'chatbox'])->name('chatbox');
