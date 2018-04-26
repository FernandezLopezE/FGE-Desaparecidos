<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedulaCatCenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedula_cat_senas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caracteristicas');
            $table->string('cantidad');
            $table->integer('idCedula')->unsigned();
            $table->foreign('idCedula')->references('id')->on('desaparecidos_cedula_investigacion');
            $table->integer('idCatsenas')->unsigned();
            $table->foreign('idCatsenas')->references('id')->on('cat_senas_particulares');
            $table->integer('idCatsenasParticulares')->unsigned();
            $table->foreign('idCatsenasParticulares')->references('id')->on('cat_senas_particulares_ubicaciones');
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
        Schema::dropIfExists('cedula_cat_cenas');
    }
}
