<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatUser extends Model
{
    use HasFactory;

    protected $table = 'riwayat_user';
    protected $primaryKey = 'id_riwayat_user';
    protected $fillable = [
        'id_reservasi',
        'diagnosa',
    ];

    // Relasi dengan model Reservasi
    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_reservasi');
    }
}
