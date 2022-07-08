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
            $table->foreignId('game_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('pool_item_id')->constrained();
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
