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
        'diagnosa'
    ];

    // Relasi dengan tabel reservasi
    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_reservasi', 'id_reservasi');
    }
}
