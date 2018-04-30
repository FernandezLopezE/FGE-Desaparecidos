<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotIntervencionesMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_intervenciones_medicas', function (Blueprint $table) {
            $table->integer('idIntervencionesQuirurgicas')->unsigned()->nullable();           
            $table->foreign('idIntervencionesQuirurgicas')->references('id')->on('cat_intervenciones_quirurgicas');
            $table->integer('idAntecedentesMedicos')->unsigned()->nullable();           
            $table->foreign('idAntecedentesMedicos')->references('id')->on('antecedentes_medicos');
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
        Schema::dropIfExists('pivot_intervenciones_medicas');
    }
}
