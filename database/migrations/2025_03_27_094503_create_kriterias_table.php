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
        Schema::create('kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kriteria')->unique();
            $table->string('kriteria')->nullable();
            $table->text('desc')->nullable();
            $table->text('note')->nullable(true);
            $table->unsignedBigInteger('bobot_id')->nullable(6);
            $table->enum('kategori',['benefit','cost']);
            $table->timestamps();

            $table->foreign('bobot_id')->references('id')->on('bobots');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriterias');
    }
};
