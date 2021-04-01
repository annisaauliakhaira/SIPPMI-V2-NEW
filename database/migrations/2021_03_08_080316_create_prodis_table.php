<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('fakultas_id')->unsigned();
            $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode')->nullable();
            $table->string('kode_dikti')->nullable();
            $table->string('akreditasi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodis');
    }
}
