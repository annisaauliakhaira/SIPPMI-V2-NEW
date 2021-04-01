<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_outputs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penelitian_id')->unsigned();
            $table->foreign('penelitian_id')->references('id')->on('penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('skema_penelitian_output_id')->unsigned();
            $table->foreign('skema_penelitian_output_id')->references('id')->on('skema_penelitian_outputs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('filename');
            $table->date('tanggal_upload');
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
        Schema::dropIfExists('penelitian_outputs');
    }
}
