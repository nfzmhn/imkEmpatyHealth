<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = 'spesialis';

    // Menentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = ['nama_spesialis'];

    // Relasi dengan Dokter (Spesialis memiliki banyak dokter)
    public function dokters()
    {
        return $this->hasMany(Dokter::class, 'id_spesialis');
    }
}
