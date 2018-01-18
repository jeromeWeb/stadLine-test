<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->integer('game_id');
            $table->foreign('game_id')
                ->references('id')
                ->on('games')
=======
            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games')
>>>>>>> b8bc91ec7a899ecf5336b7d1d61c3bcbe80f3eaa
                ->onDelete('cascade');
            $table->integer('nb_card')->unsigned();
            $table->integer('nb_round')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rounds');
    }
}
