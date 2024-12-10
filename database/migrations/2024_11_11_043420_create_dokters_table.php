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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->integer('umur');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('status_pernikahan', ['Sudah', 'Belum', 'Cerai']);
            $table->enum('latar_belakang', ['Rendah', 'Menengah', 'Atas']);
            $table->unsignedBigInteger('id_spesialis');

            $table->timestamps();

            $table->foreign('id_spesialis')->references('id_spesialis')->on('spesialis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
