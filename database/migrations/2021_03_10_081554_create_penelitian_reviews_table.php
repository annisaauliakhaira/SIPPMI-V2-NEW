<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penelitian_id')->unsigned();
            $table->foreign('penelitian_id')->references('id')->on('penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('reviewer_id')->unsigned();
            $table->foreign('reviewer_id')->references('id')->on('reviewers')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('periode_evaluasi_id')->unsigned();
            $table->foreign('periode_evaluasi_id')->references('id')->on('skema_penelitian_periode_evaluasis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('biaya');
            $table->string('komentar');
            $table->date('review_at');
            $table->date('finished');
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
        Schema::dropIfExists('penelitian_reviews');
    }
}
