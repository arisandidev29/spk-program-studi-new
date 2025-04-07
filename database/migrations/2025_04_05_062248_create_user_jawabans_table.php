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
        Schema::create('user_jawabans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->uuid('kriteria_id');
            $table->unsignedBigInteger('alternative_id');
            $table->unsignedBigInteger('pilihan_jawaban_id');
            $table->timestamps();

            

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kriteria_id')->references('id')->on('kriterias');
            $table->foreign('alternative_id')->references('id')->on('alternatives');
            $table->foreign('pilihan_jawaban_id')->references('id')->on('pilihan_jawabans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_jawabans');
    }
};
