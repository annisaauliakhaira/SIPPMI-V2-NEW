<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_biayas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penelitian_id')->unsigned()->nullable();
            $table->foreign('penelitian_id')->references('id')->on('penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('biaya_skema_id')->unsigned()->nullable();
            $table->foreign('biaya_skema_id')->references('id')->on('biaya_skemas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah')->nullable();
            $table->integer('jumlah_final')->nullable();
            $table->string('satuan')->nullable();
            $table->integer('harga_satuan_final')->nullable();
            $table->string('justifikasi')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('penelitian_biayas');
    }
}
