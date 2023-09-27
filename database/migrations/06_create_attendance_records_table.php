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
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enrollment_id');
            $table->timestamp('attendance_date')->nullable();
            $table->string('photo')->nullable();
            $table->float('jarak')->nullable();
            $table->integer('status')->comment('1:masuk, 2:izin/sakit, 3:alfa');
            $table->timestamps();

            $table->foreign('enrollment_id')->references('id')->on('enrollment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_records');
    }
};
