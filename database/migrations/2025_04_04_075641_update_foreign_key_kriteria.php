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
        Schema::table('kriterias', function (Blueprint $table) {
            $table->dropForeign(['bobot_id']);
            $table->foreign('bobot_id')
                ->references('id')
                ->on('bobots')
                ->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kriterias', function (Blueprint $table) {
            $table->dropForeign(['bobot_id']);
            $table->foreign('bobot_id')
                ->references('id')
                ->on('bobots');
        });
        
    }
};
