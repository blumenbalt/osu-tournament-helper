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
        Schema::create('pool_items', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['nomod', 'hardrock', 'hidden', 'doubletime', 'freemod', 'easy', 'halftime', 'flashlight', 'tiebreaker']);
            $table->integer('type_number');
            $table->foreignId('music_id')->constrained('musics');
            $table->foreignId('map_pool_id')->constrained();
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
        Schema::dropIfExists('pool_items');
    }
};
