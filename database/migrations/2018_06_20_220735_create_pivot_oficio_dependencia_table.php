<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotOficioDependenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_oficio_dependencia', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idOficio')->unsigned()->nullable();           
            $table->foreign('idOficio')->references('id')->on('cat_documentos');

            $table->integer('idDependencia')->unsigned()->nullable();           
            $table->foreign('idDependencia')->references('id')->on('cat_dependencias');

            $table->integer('idEncargado')->unsigned()->nullable();           
            $table->foreign('idEncargado')->references('id')->on('cat_encargado');

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
        Schema::dropIfExists('pivot_oficio_dependencia');
    }
}
