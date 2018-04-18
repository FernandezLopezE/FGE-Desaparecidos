<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatPartesCuerpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_partes_cuerpo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20);
            $table->string('image');
            $table->integer('idColoresCuerpo')->unsigned()->nullable();           
            $table->foreign('idColoresCuerpo')->references('id')->on('cat_colores_cuerpo');
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
        Schema::dropIfExists('cat_partes_cuerpo');
    }
}
