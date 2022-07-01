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
        Schema::create('user_scores', function (Blueprint $table) {
            $table->id();
            $table->integer('points');
            $table->integer('max_combo');
            $table->set('mods', ['hardrock', 'hidden', 'doubletime', 'flashlight', 'easy']);
            $table->integer('game_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('pool_item_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pool_item_id')->references('id')->on('pool_items');
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
        Schema::dropIfExists('user_scores');
    }
};
