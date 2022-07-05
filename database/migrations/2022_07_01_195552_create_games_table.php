<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('osu_match_id');
            $table->integer('bracket_id')->unsigned();
            $table->integer('team_a')->unsigned();
            $table->integer('team_b')->unsigned();
            $table->integer('winner_team')->unsigned();
            $table->foreign('bracket_id')->references('id')->on('brackets');
            $table->foreign('team_a')->references('id')->on('team_tournament');
            $table->foreign('team_b')->references('id')->on('team_tournament');
            $table->foreign('winner_team')->references('id')->on('team_tournament');
            $table->date('game_date');
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
        Schema::dropIfExists('games');
    }
};
