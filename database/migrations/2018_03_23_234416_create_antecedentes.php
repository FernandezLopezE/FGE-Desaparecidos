<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('antecedentes', function(Blueprint $table){
            $table->increments('id');
            $table->boolean('antecedentes');
            $table->string('mes');
            $table->year('anio');
            $table->text('observaciones');
            $table->integer('idPersonaDesaparecida')->unsigned();
            $table->foreign('idPersonaDesaparecida')->references('id')->on('persona_desaparecidos');
            $table->integer('idDelito')->unsigned();
            $table->foreign('idDelito')->references('id')->on('cat_delito');
            $table->integer('idCentroReclusion')->unsigned();
            $table->foreign('idCentroReclusion')->references('id')->on('cat_centro_reclusion');
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
        //
        Schema::dropIfExists('antecedentes');
    }
}
