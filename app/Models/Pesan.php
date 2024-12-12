<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';

    protected $fillable = ['pesan', 'id_forum', 'id_anggota_forum'];

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'id_forum');
    }

    public function anggotaForum()
    {
        return $this->belongsTo(AnggotaForum::class, 'id_anggota_forum');
    }
}
