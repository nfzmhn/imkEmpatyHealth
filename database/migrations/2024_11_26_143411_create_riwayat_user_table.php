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
            $table->text('diagnosa');
            $table->timestamps();

            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_user');
    }
};
