<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'jadwal_dokters';

    // Menentukan primary key (jika menggunakan id_jadwal_dokter)
    protected $primaryKey = 'id_jadwal_dokter';

    // Menentukan apakah primary key bertipe increment (default: true)
    public $incrementing = true;

    // Tipe data primary key
    protected $keyType = 'int';

    // Kolom yang dapat diisi secara mass assignment
    protected $fillable = [
        'id_dokter',
        'nama_jadwal',
        'jadwal',
        'durasi_tindakan', // Menyimpan durasi tindakan dalam menit atau unit waktu lainnya
    ];

    // Timestamps (created_at, updated_at) akan dikelola secara otomatis oleh Eloquent
    public $timestamps = true;

    // Relasi: Jadwal dimiliki oleh satu Dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter', 'id');
    }

    // Relasi: Jadwal dapat dimiliki oleh beberapa reservasi
    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'id_jadwal_dokter', 'id_jadwal_dokter');
    }

    // Contoh tambahan: Format jadwal untuk keperluan tampilan
    public function getFormattedJadwalAttribute()
    {
        return date('d M Y, H:i', strtotime($this->jadwal));
    }

    // Contoh tambahan: Durasi tindakan dalam jam dan menit
    public function getDurasiFormattedAttribute()
    {
        $hours = intdiv($this->durasi_tindakan, 60);
        $minutes = $this->durasi_tindakan % 60;

        return sprintf('%02d jam %02d menit', $hours, $minutes);
    }
}
