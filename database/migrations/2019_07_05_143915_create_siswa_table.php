<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('siswa')) {
        Schema::create('siswa', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nis')->default(NULL);
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('password');
            $table->string('jurusan');
            $table->string('tingkat');
            $table->string('kelas');
            $table->timestamps();

            $table->foreign('user_id')->references('id')
                        ->on('users')->onDelete('cascade');
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
