<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ubah Dokter ke User jika ingin menggunakan fitur autentikasi


class Dokter extends Authenticatable
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = 'dokters';

    // Menentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'nama', 
        'alamat',
        'umur',
        'email',
        'password',
        'jenis_kelamin',
        'status_pernikahan',
        'latar_belakang',
        'id_spesialis',
    ];

    // Tentukan kolom yang harus disembunyikan saat serialisasi (misalnya saat JSON)
    protected $hidden = [
        'password', // Kolom password harus disembunyikan agar tidak terlihat di output
        'remember_token',
    ];

    // Tentukan atribut yang harus di-cast (misalnya menjadi tipe datetime)
    protected $casts = [
        'email_verified_at' => 'datetime', // Pastikan kolom email_verified_at ada di tabel 'dokters'
    ];

    // Menentukan relasi dengan tabel Spesialis (Dokter memiliki satu spesialis)
    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class, 'id_spesialis');
    }

    // Menentukan relasi dengan tabel JadwalDokter (Dokter memiliki banyak jadwal)
    public function jadwals()
    {
        return $this->hasMany(JadwalDokter::class, 'id_dokter');
    }

    // Mutator untuk mengenkripsi password sebelum menyimpannya di database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value); // Menggunakan bcrypt untuk mengenkripsi password
    }

    // Akses password yang terenkripsi untuk keperluan autentikasi
    public function getAuthPassword()
    {
        return $this->password; // Mengembalikan password yang terenkripsi
    }

    // app/Models/Dokter.php
    public function reservasi()
    {
    return $this->hasMany(Reservasi::class, 'id_dokter');
    }

}
