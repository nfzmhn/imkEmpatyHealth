<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaForum extends Model
{
    use HasFactory;

    protected $table = 'anggota_forum';
    protected $primaryKey = 'id_anggota_forum';

    protected $fillable = ['id_user', 'id_dokter'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'id_forum');
    }

    public function pesan()
    {
        return $this->hasMany(Pesan::class, 'id_anggota_forum');
    }
}
