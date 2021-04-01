<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkemaPenelitianOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skema_penelitian_outputs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jenis_output_id')->unsigned();
            $table->foreign('jenis_output_id')->references('id')->on('jenis_outputs')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('skema_penelitian_id')->unsigned();
            $table->foreign('skema_penelitian_id')->references('id')->on('skema_penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->string('field');
            $table->string('mime');
            $table->string('required');
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
        Schema::dropIfExists('skema_penelitian_outputs');
    }
}
