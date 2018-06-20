<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_dependencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('correo')->nullable();
            $table->text('oficios')->nullable();
            // $table->integer('documento')->unsigned();
            // $table->foreign('documento')->references('id')->on('cat_documentos');
            $table->integer('idEncargado')->unsigned();
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
        Schema::dropIfExists('cat_dependencias');
    }
}
