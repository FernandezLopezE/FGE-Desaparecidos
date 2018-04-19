<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedulaPartesCuerpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedula_partes_cuerpo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lado');
            $table->string('observaciones');
            $table->integer('idPartesCuerpo')->unsigned()->nullable();           
            $table->foreign('idPartesCuerpo')->references('id')->on('cat_partes_cuerpo');
            $table->integer('idColoresCuerpo')->unsigned()->nullable();           
            $table->foreign('idColoresCuerpo')->references('id')->on('cat_colores_cuerpo');
            $table->integer('idCedula')->unsigned()->nullable();           
            $table->foreign('idCedula')->references('id')->on('desaparecidos_cedula_investigacion');
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
        Schema::dropIfExists('cedula_partes_cuerpo');
    }
}
