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
        Schema::create('custom_links', function (Blueprint $table) {
            $table->id('id_custom');
            $table->foreignId('id_pengguna')->constrained('users')->onDelete('cascade');
            $table->string('Nama_Link');
            $table->string('Source_Link');
            $table->string('Deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom__links');
    }
};
