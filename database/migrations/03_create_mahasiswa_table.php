<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('kelas');
            $table->integer('status')->comment('1:aktif, 2:magang/konversi_sks, 3:cuti');
            $table->timestamps();

            $table->foreign('kelas')->references('class_name')->on('class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
