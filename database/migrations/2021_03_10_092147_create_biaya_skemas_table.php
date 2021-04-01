<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaSkemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_skemas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('biaya_komponen_id')->unsigned();
            $table->foreign('biaya_komponen_id')->references('id')->on('biaya_komponens')->onDelete('cascade')->onUpdate('cascade');
            $table->string('persen_max');
            $table->string('persen_min');
            $table->bigInteger('skema_penelitian_id')->unsigned();
            $table->foreign('skema_penelitian_id')->references('id')->on('skema_penelitians')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('biaya_skemas');
    }
}
