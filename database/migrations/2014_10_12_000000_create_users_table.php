<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('no_telp');
            $table->integer('umur');
            $table->text('alamat');
            $table->enum('pendidikan_terakhir', ['SD', 'SLTP', 'SLTA', 'Perguruan Tinggi']);
            $table->enum('status_pernikahan', ['Sudah', 'Belum', 'Cerai']);
            $table->string('pekerjaan');
            $table->enum('penghasilan', ['Rendah', 'Menengah', 'Atas']);
            $table->enum('tunjangan', ['BPJS', 'Asuransi', 'Tidak Keduanya']);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
