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
            $table->string('jangka_waktu');
            $table->integer('biaya_minimal');
            $table->integer('biaya_maksimal');
            $table->string('sumber_dana');
            $table->string('anggota_min');
            $table->string('anggota_max');
            $table->string('mahasiswa_min');
            $table->string('mahasiswa_max');
            $table->string('jabatan_ketua_min');
            $table->string('jabatan_ketua_max');
            $table->string('jabatan_anggota_min');
            $table->string('jabatan_anggota_max');
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
