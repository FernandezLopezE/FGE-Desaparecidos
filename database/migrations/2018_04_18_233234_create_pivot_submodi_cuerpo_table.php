<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotSubmodiCuerpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_submodi_cuerpo', function (Blueprint $table) {
            $table->integer('idCedulaPartesCuerpo')->unsigned()->nullable();           
            $table->foreign('idCedulaPartesCuerpo')->references('id')->on('cedula_partes_cuerpo');
            $table->integer('idModificaciones')->unsigned()->nullable();           
            $table->foreign('idModificaciones')->references('id')->on('cat_modificaciones_cuerpo');
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
        Schema::dropIfExists('pivot_submodi_cuerpo');
    }
}
