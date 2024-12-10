<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $table = 'forum';
    protected $primaryKey = 'id_forum';

    protected $fillable = ['nama_forum', 'id_spesialis'];

    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class, 'id_spesialis');
    }

    public function anggota()
    {
        return $this->hasMany(AnggotaForum::class, 'id_forum');
    }

    public function pesan()
    {
        return $this->hasMany(Pesan::class, 'id_forum');
    }
}
