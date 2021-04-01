<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianReviewScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_review_scores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penelitian_review_id')->unsigned();
            $table->foreign('penelitian_review_id')->references('id')->on('penelitian_reviews')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('skema_penelitian_question_id')->unsigned();
            $table->foreign('skema_penelitian_question_id')->references('id')->on('skema_penelitian_questions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('bobot');
            $table->string('nilai');
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
        Schema::dropIfExists('penelitian_review_scores');
    }
}
