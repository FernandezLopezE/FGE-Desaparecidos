<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotImplantesMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_implantes_medicos', function (Blueprint $table) {
            $table->integer('idImplantes')->unsigned()->nullable();           
            $table->foreign('idImplantes')->references('id')->on('cat_implantes');
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
        Schema::dropIfExists('pivot_implantes_medicos');
    }
}
