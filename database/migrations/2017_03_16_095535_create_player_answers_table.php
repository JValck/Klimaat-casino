<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('player_answers', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedSmallInteger('bet');
        $table->boolean('right');
        $table->boolean('joker_used')->default(false);

        $table->unsignedInteger('question_id');
        $table->unsignedInteger('player_id');
        $table->unsignedInteger('game_id');

        $table->unique(['player_id', 'question_id']);
        $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');//delete answer when Question is deleted
        $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
        $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_answers');
    }
}
