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
        Schema::table('pilihan_jawabans', function (Blueprint $table) {
            $table->dropForeign(['id_kriteria']); // Hapus foreign key lama
            $table->foreign('id_kriteria')
                ->references('id')
                ->on('kriterias')
                ->onDelete('cascade'); // Tambahkan aturan ON DELETE CASCADE
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pilihan_jawabans', function (Blueprint $table) {
            $table->dropForeign(['id_kriteria']); // Hapus foreign key baru
            $table->foreign('id_kriteria')
                ->references('id')
                ->on('kriterias'); // Tambahkan foreign key tanpa ON DELETE CASCADE
        });
    }
};
