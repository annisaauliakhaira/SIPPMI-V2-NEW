<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
   
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('gelar_depan')->nullable();
            $table->string('nama');
            $table->string('gelar_belakang')->nullable();
            $table->string('nidn');
            $table->string('tempat_lahir')->nullable();
            $table->bigInteger('prodi_id')->unsigned();
            $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_lahir')->nullable();
            $table->string('jabatan_fungsional')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->enum('jenis_kelamin',['laki-laki', 'perempuan']);
            $table->string('pangkat_golongan')->nullable();
            $table->string('telepon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
