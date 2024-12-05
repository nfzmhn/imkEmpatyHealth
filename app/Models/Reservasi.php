<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        'id_user',
        'id_dokter',
        'id_jadwal_dokter',
        'keluhan',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function jadwalDokter()
    {
        return $this->belongsTo(JadwalDokter::class, 'id_jadwal_dokter');
    }
}
