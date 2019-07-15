<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('tahun_id')->unsigned();
            $table->foreign('tahun_id')->references('id')->on('tahun')->onDelete('cascade');
            $table->string('nis')->default(NULL);
            $table->string('role');
            $table->string('nama');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
