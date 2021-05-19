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
            $table->string('status_usulan')->nullable();
            $table->string('judul');
            $table->bigInteger('skema_penelitian_periode_id')->unsigned();
            $table->foreign('skema_penelitian_periode_id')->references('id')->on('skema_penelitian_periodes')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('ringkasan')->nullable();
            $table->integer('biaya')->nullable();
            $table->integer('biaya_final')->nullable();
            $table->string('multi_tahun');
            $table->string('tahun', 4)->nullable();
            $table->string('keterangan')->nullable();
            $table->string('file_cv')->nullable();
            $table->string('file_pengesahan')->nullable();
            $table->string('file_proposal')->nullable();
            $table->string('file_lap_progress')->nullable();
            $table->string('file_keuangan')->nullable();
            $table->string('file_akhir')->nullable();
            $table->string('file_profil')->nullable();
            $table->string('file_logbook')->nullable();
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
