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
        Schema::create('riwayat_user', function (Blueprint $table) {
            $table->id('id_riwayat_user');
            $table->unsignedBigInteger('id_reservasi');
            $table->unsignedBigInteger('id_user'); // Tambahkan ID pasien
            $table->unsignedBigInteger('id_dokter'); // Tambahkan ID dokter
            $table->text('diagnosa');
            $table->timestamps();

            // Foreign key ke tabel reservasi
            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi')->onDelete('cascade');

            // Foreign key ke tabel users (asumsi tabel pasien bernama "users")
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            // Foreign key ke tabel dokter
            $table->foreign('id_dokter')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_user', function (Blueprint $table) {
            $table->dropForeign(['id_reservasi']); // Foreign key ke reservasi
        });
    
        Schema::dropIfExists('riwayat_user');
    }
    
};
