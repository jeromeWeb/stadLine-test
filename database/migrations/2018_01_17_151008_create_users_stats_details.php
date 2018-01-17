<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersStatsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_stats_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')
                ->references('id')
                ->on('games')
                ->onDelete('cascade');
            $table->integer('user_stats_id')->unsigned();
            $table->foreign('user_stats_id')
                ->references('id')
                ->on('users_stats')
                ->onDelete('cascade');
            $table->boolean('won');
            $table->integer('points')->unsigned();
            $table->integer('won_bets')->unsigned();
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
        Schema::dropIfExists('users_stats_details');
    }
}
