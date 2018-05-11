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
            $table->string('lado')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('otraParticularidad')->nullable();
            $table->string('otraModificacion')->nullable();
            $table->string('otroTipoCuerpo')->nullable();
            $table->string('otroColor')->nullable();
            $table->integer('idPartesCuerpo')->unsigned()->nullable();           
            $table->foreign('idPartesCuerpo')->references('id')->on('cat_partes_cuerpo');
            $table->integer('idTamanoCuerpo')->unsigned()->nullable();           
            $table->foreign('idTamanoCuerpo')->references('id')->on('cat_tamano_cuerpo');
            $table->integer('idTipoCuerpo')->unsigned()->nullable();           
            $table->foreign('idTipoCuerpo')->references('id')->on('cat_tipos_cuerpo');
            $table->integer('idColoresCuerpo')->unsigned()->nullable();           
            $table->foreign('idColoresCuerpo')->references('id')->on('cat_colores_cuerpo');
            $table->integer('idPersonaDesaparecida')->unsigned()->nullable();           
            $table->foreign('idPersonaDesaparecida')->references('id')->on('desaparecidos_personas');
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
