<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotAdiccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_adicciones', function (Blueprint $table) {
            $table->integer('idAdicciones')->unsigned()->nullable();           
            $table->foreign('idAdicciones')->references('id')->on('cat_adicciones');
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
        Schema::dropIfExists('pivot_adicciones');
    }
}
