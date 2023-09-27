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
        Schema::create('class', function (Blueprint $table) {
            $table->string('class_name')->primary();
            $table->string('nip_wali_kelas');
            $table->unsignedBigInteger('id_jurusan');
            $table->timestamps();

            $table->foreign('nip_wali_kelas')->references('nip')->on('dosen');
            $table->foreign('id_jurusan')->references('id')->on('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class');
    }
};
