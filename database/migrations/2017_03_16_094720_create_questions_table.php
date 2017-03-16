<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('questions', function (Blueprint $table) {
        $table->increments('id');
        $table->text('question_text');
        $table->unsignedInteger('pinball_id');

        $table->foreign('pinball_id')->references('id')->on('pinballs')->onDelete('cascade');//delete question when pinball is deleted
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
