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
            //@todo check enum types
            $table->enum('type', []);
            $table->integer('music_id')->unsigned();
            $table->integer('map_pool_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('music');
            $table->foreign('map_pool_id')->references('id')->on('map_pools');
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
