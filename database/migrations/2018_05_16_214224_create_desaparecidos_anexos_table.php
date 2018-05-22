<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoAnexo'); 
            $table->string('nombre');           
            $table->string('ruta');
            $table->integer('idDesaparecido')->unsigned();
            $table->foreign('idDesaparecido')->references('id')->on('desaparecidos_personas')->onDelete('cascade');   
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
        Schema::dropIfExists('desaparecidos_anexos');
    }
}
