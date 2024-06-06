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
            $table->id('id_public');
            $table->unsignedBigInteger('id_pengguna_link'); // Changed to unsignedBigInteger
            $table->unsignedBigInteger('id_custom_link');
            $table->foreign('id_pengguna_link')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_custom_link')->references('id_custom')->on('customs')->onDelete('cascade');
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
