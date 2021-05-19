<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkemaPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skema_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('fakultas_id')->unsigned();
            $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jangka_waktu')->nullable();
            $table->integer('biaya_minimal')->nullable();
            $table->integer('biaya_maksimal')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->integer('anggota_min')->nullable();
            $table->integer('anggota_max')->nullable();
            $table->integer('mahasiswa_min')->nullable();
            $table->integer('mahasiswa_max')->nullable();
            $table->integer('jabatan_ketua_min')->nullable();
            $table->integer('jabatan_ketua_max')->nullable();
            $table->integer('jabatan_anggota_min')->nullable();
            $table->integer('jabatan_anggota_max')->nullable();
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
        Schema::dropIfExists('skema_penelitians');
    }
}
