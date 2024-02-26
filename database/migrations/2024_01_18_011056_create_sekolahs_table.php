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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->char('id_sekolah', 5);
            $table->varchar('nama_sekolah', 50);
            $table->varchar('nama_panggilan', 50);
            $table->varchar('foto', 255);
            $table->varchar('visi', 255);
            $table->varchar('misi', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
