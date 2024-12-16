<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatUser extends Model
{
    use HasFactory;

    protected $table = 'riwayat_user';

    // Tentukan kolom mana saja yang dapat diisi
    protected $fillable = [
        'id_reservasi',
        'id_user',
        'id_dokter',
        'diagnosa'
    ];

    // Relasi dengan tabel reservasi
    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_reservasi', 'id_reservasi');
    }

    public function user()
{
    return $this->belongsTo(User::class, 'id_user', 'id');
}

 // Relasi untuk mengambil spesialis melalui dokter di reservasi
 public function spesialis()
 {
     return $this->hasOneThrough(Spesialis::class, Dokter::class, 'id_dokter', 'id_spesialis', 'id_dokter', 'id_spesialis');
 }
 // Relasi ke tabel Dokter
 public function dokter()
 {
     return $this->belongsTo(Dokter::class, 'id_dokter');
 }

 // Tambahkan relasi ke forum (melalui dokter/spesialis)
 public function forum()
 {
     return $this->belongsTo(Forum::class, 'id_forum', 'id_forum');
 }
}
