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
        Schema::create('public_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengguna_link')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_custom_link')->constrained('customs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_links');
    }
};
