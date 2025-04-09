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
        Schema::create('hasil_rekomendasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('alternative_id');   
            $table->float('vektor_v')->nullable();
            $table->sting('rangking')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'alternative_id']);
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('alternative_id')->references('id')->on('alternatives')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_rekomendasis');
    }
};
