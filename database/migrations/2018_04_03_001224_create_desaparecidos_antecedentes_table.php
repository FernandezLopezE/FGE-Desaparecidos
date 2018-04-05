<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('fecha')->nullable();
            $table->text('observaciones')->nullable();

            $table->integer('idDesaparecido')->unsigned();
            $table->foreign('idDesaparecido')->references('id')->on('desaparecidos_personas');
            $table->integer('idDelito')->unsigned();
            $table->foreign('idDelito')->references('id')->on('cat_delito');
            $table->integer('idCentroReclusion')->unsigned();
            $table->foreign('idCentroReclusion')->references('id')->on('cat_centro_reclusion');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desaparecidos_antecedentes');
    }
}
