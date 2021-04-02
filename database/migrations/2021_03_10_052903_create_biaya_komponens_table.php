<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaKomponensTable extends Migration
{
    
    public function up()
    {
        Schema::create('biaya_komponens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('keterangan'); 
            $table->timestamps();

        });
    }

    
    public function down()
    {
        Schema::dropIfExists('biaya_komponens');
    }
}
