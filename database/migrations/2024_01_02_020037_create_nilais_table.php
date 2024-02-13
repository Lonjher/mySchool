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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id('nilai_id');
            $table->unsignedBigInteger('mapel_id');
            $table->foreign('mapel_id')->references('mapel_id')->on('mapels');
            // $table->unsignedBigInteger('id_student');
            // $table->foreign('id_student')->references('id')->on('students');
            $table->integer('nilai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
