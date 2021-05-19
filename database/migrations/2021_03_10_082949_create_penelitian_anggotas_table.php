<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_anggotas', function (Blueprint $table) {
            $table->id();
            $table->integer('tipe')->default(1); //1 Dosen, 2 Mahasiswa
            $table->bigInteger('dosen_id')->unsigned()->nullable();
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('penelitian_id')->unsigned()->nullable();
            $table->foreign('penelitian_id')->references('id')->on('penelitians')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama')->nullable();
            $table->string('identifier')->nullable();
            $table->string('unit')->nullable();
            $table->string('jabatan')->nullable();
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
        Schema::dropIfExists('penelitian_anggotas');
    }
}
