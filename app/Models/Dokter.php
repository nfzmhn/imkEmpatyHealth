<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = 'dokters';

    // Menentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'jenis_kelamin',
        'status_pernikahan',
        'latar_belakang',
        'id_spesialis',
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
}
