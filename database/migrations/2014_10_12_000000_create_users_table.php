<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('osu_id');
            $table->integer('pp');
            $table->float('updated_rank');
            $table->string('country');
            //pending for changes
            $table->string('badges');
            //pending for changes
            $table->string('strengths');
            //pending for changes
            $table->string('weaknesses');
            $table->set('mod_preference', ['hardrock', 'doubletime', 'hidden', 'flashlight', 'easy']);
            //pending for changes
            $table->date('best_schedule');

            //pending for changes
            // $table->enum('skills', []);
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
        Schema::dropIfExists('users');
    }
}
