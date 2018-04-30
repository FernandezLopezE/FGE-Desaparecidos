<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotEnfermedadesMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_enfermedades_medicas', function (Blueprint $table) {
            $table->integer('idEnfermedades')->unsigned()->nullable();           
            $table->foreign('idEnfermedades')->references('id')->on('cat_enfermedades');
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
        Schema::dropIfExists('pivot_enfermedades_medicas');
    }
}
