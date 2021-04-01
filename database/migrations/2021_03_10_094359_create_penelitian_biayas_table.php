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
            $table->bigInteger('penelitian_id')->unsigned();
            $table->foreign('penelitian_id')->references('id')->on('penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('biaya_skema_id')->unsigned();
            $table->foreign('biaya_skema_id')->references('id')->on('biaya_skemas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah');
            $table->integer('jumlah_final');
            $table->integer('satuan');
            $table->integer('harga_satuan_final');
            $table->string('justifikasi');
            $table->string('status');
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
