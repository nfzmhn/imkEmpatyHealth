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
        Schema::table('forum', function (Blueprint $table) {
            $table->text('deskripsi')->nullable(); // Kolom deskripsi
            $table->string('whatsapp_link')->nullable(); // Kolom whatsapp_link
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forum', function (Blueprint $table) {
            $table->dropColumn(['deskripsi', 'whatsapp_link']);
        });
    }
};
