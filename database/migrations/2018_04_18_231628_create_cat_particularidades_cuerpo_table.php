<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatParticularidadesCuerpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_particularidades_cuerpo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('idPartesCuerpo')->unsigned()->nullable();           
            $table->foreign('idPartesCuerpo')->references('id')->on('cat_partes_cuerpo');
            //$table->integer('idParticularidadesCuerpo')->unsigned()->nullable();           
            //$table->foreign('idParticularidadesCuerpo')->references('id')->on('cat_particularidades_cuerpo');
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
        Schema::dropIfExists('cat_particularidades_cuerpo');
    }
}
