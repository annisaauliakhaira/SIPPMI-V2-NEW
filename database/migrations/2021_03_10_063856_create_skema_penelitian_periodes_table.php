<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkemaPenelitianPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skema_penelitian_periodes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('skema_penelitian_id')->unsigned();
            $table->foreign('skema_penelitian_id')->references('id')->on('skema_penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->date('tanggal_mulai_registrasi');
            $table->date('tanggal_akhir_registrasi');
            $table->date('tanggal_mulai_penelitian');
            $table->date('tanggal_akhir_penelitian');
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
        Schema::dropIfExists('skema_penelitian_periodes');
    }
}
