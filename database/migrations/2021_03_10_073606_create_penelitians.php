<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengusul_id')->unsigned();
            $table->foreign('pengusul_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('prodi_id')->unsigned();
            $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status_usulan');
            $table->string('judul');
            $table->bigInteger('skema_penelitian_periode_id')->unsigned();
            $table->foreign('skema_penelitian_periode_id')->references('id')->on('skema_penelitian_periodes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ringakasan');
            $table->integer('biaya');
            $table->integer('biaya_final');
            $table->string('multi_tahun');
            $table->string('tahun', 4);
            $table->string('keterangan');
            $table->string('file_cv');
            $table->string('file_pegesahan');
            $table->string('file_proposal');
            $table->string('file_lap_progress');
            $table->string('file_keuangan');
            $table->string('file_akhir');
            $table->string('file_profil');
            $table->string('file_logbook');
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
        Schema::dropIfExists('penelitians');
    }
}
