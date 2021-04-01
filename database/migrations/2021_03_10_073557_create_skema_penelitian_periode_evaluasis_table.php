<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkemaPenelitianPeriodeEvaluasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skema_penelitian_periode_evaluasis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('skema_penelitian_periode_id')->unsigned();
            $table->foreign('skema_penelitian_periode_id', 'skp_periode_id_foreign')->references('id')->on('skema_penelitian_periodes')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('skema_penelitian_evaluasi_id')->unsigned();
            $table->foreign('skema_penelitian_evaluasi_id', 'skp_evaluasi_id_foreign')->references('id')->on('skema_penelitian_evaluasis')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
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
        Schema::dropIfExists('skema_penelitian_periode_evaluasis');
    }
}
