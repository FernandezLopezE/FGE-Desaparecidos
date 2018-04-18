<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSubParticularidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_sub_particularidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('idParticularidadesCuerpo')->unsigned()->nullable();           
            $table->foreign('idParticularidadesCuerpo')->references('id')->on('cat_particularidades_cuerpo');
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
        Schema::dropIfExists('cat_sub_particularidades');
    }
}
