<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidoOficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecido_oficios', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idOficio')->unsigned()->nullable();           
            $table->foreign('idOficio')->references('id')->on('cat_documentos');

            $table->integer('idDesaparecido')->unsigned();           
            $table->foreign('idDesaparecido')->references('id')->on('desaparecidos_personas');

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
        Schema::dropIfExists('desaparecido_oficios');
    }
}
