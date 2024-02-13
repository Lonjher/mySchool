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
        Schema::create('mapels', function (Blueprint $table) {
            $table->id('mapel_id');
            $table->unsignedBigInteger('kelas_id');
            $table->foreignId('kelas_id')->references('kelas_id')->on('kelas');
            // $table->unsignedBigInteger('id_nilai');
            // $table->foreign('id_nilai')->references('id_nilai')->on('nilais');
            $table->string('nama_pelajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapels');
    }
};