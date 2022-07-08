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
            $table->foreignId('bracket_id')->constrained();
            $table->foreignId('team_a')->constrained('team_tournament');
            $table->foreignId('team_b')->constrained('team_tournament');
            $table->foreignId('winner_team')->constrained('team_tournament');
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
