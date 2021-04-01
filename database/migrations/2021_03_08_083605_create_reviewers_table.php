<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewersTable extends Migration
{
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviewers');
    }
}
