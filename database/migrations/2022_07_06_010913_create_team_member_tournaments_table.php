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
        Schema::create('team_member_tournaments', function (Blueprint $table) {
            $table->id();
            $table->integer('team_member_id')->unsigned();
            $table->integer('team_tournament_id')->unsigned();
            $table->foreign('team_member_id')->references('id')->on('team_members');
            $table->foreign('team_tournament_id')->references('id')->on('team_tournament');
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
        Schema::dropIfExists('team_member_tournaments');
    }
};
