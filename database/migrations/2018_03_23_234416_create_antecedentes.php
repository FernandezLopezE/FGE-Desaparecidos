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
            $table->integer('id_nombre_desaparecidos')->unsigned()->default('1');
            $table->foreign('id_nombre_desaparecidos')->references('id')->on('nombre_desaparecidos');
            $table->integer('id_delito')->unsigned();
            $table->integer('id_delito')->references('id')->on('cat_delito');
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
