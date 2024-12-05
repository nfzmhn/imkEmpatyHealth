<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = 'jadwal_dokters';

    // Menentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = ['id_dokter', 'nama_jadwal', 'jadwal'];

    // Relasi dengan Dokter (Setiap JadwalDokter dimiliki oleh seorang Dokter)
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
