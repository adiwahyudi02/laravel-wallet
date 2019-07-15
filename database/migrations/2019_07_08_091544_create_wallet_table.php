<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('wallet')) {
        Schema::create('wallet', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('saldo')->default(0);
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
        Schema::dropIfExists('wallet');
    }
}
