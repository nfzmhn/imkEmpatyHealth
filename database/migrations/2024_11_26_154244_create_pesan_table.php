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
        Schema::create('pesan', function (Blueprint $table) {
            $table->id('id_pesan');
            $table->text('pesan');
            $table->unsignedBigInteger('id_forum');
            $table->unsignedBigInteger('id_anggota_forum');
            $table->timestamps();

            $table->foreign('id_forum')->references('id_forum')->on('forum')->onDelete('cascade');
            $table->foreign('id_anggota_forum')->references('id_anggota_forum')->on('anggota_forum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan');
    }
};
