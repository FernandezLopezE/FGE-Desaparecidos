<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosPrendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_prendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo',50);
            $table->string('material',50);
            $table->string('color',50);
            $table->string('dibujoBordadoFranja',50);
            $table->string('marcaOrigen',50);
            $table->string('talla',50);

            $table->integer('idCedula')->unsigned();
            $table->foreign('idCedula')->references('id')->on('desaparecidos_cedula_investigacion');

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
        Schema::dropIfExists('desaparecidos_prendas');
    }
}
