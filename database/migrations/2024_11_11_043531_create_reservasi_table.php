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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('id_reservasi');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_dokter');
            $table->unsignedBigInteger('id_jadwal_dokter');
            $table->text('keluhan');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id')->on('dokters')->onDelete('cascade');
            $table->foreign('id_jadwal_dokter')->references('id_jadwal_dokter')->on('jadwal_dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
