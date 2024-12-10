<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // Menentukan nama tabel jika berbeda dengan konvensi Laravel
    protected $table = 'users';

    /**
     * Tentukan kolom primary key yang digunakan.
     *
     * @var string
     */
    protected $primaryKey = 'id';  // Gunakan 'id_user' jika itu adalah nama primary key Anda

    /**
     * Menentukan apakah ID otomatis bertambah.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Tentukan kolom yang bisa diisi secara mass-assignment.
     *
     * @var array
     */
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'no_telp',
        'umur',
        'alamat',
        'pendidikan_terakhir',
        'status_pernikahan',
        'pekerjaan',
        'penghasilan',
        'tunjangan',
        'email',
        'password',  // Pastikan nama kolom password sesuai dengan yang ada di database
        'jenis_kelamin',
    ];

    /**
     * Tentukan kolom yang harus disembunyikan saat serialisasi (misalnya saat JSON).
     *
     * @var array
     */
    protected $hidden = [
        'password',  // Kolom password harus disembunyikan agar tidak terlihat di output
        'remember_token',
    ];

    /**
     * Tentukan atribut yang harus di-cast (misalnya menjadi tipe datetime).
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',  // Pastikan kolom email_verified_at ada di tabel 'users'
    ];

    /**
     * Mutator untuk mengenkripsi password sebelum menyimpannya di database.
     *
     * @param string $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);  // Menggunakan bcrypt untuk mengenkripsi password
    }

    /**
     * Akses password yang terenkripsi untuk keperluan autentikasi.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;  // Mengembalikan password yang terenkripsi
    }

    /**
     * Menentukan hubungan One-to-Many dengan model Reservasi
     * Satu User dapat memiliki banyak reservasi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'id_user', 'id');
    }
}
