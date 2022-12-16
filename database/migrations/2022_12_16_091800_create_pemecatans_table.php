<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePemecatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemecatans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_lengkap')->nullable();
            $table->integer('employees_id')->nullable();
            $table->string('prodi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('alasan_pemecatan')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pemecatans');
    }
}
