<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('observaciones')->nullable();
            $table->string('medicamentosToma')->nullable();
            $table->string('otraEnfermedad')->nullable();
            $table->string('otraIQ')->nullable();
            $table->string('otraAdiccion')->nullable();
            $table->string('otroImplante')->nullable();
            $table->integer('idPersonaDesaparecida')->unsigned()->nullable();           
            $table->foreign('idPersonaDesaparecida')->references('id')->on('desaparecidos_personas');
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
        Schema::dropIfExists('antecedentes_medicos');
    }
}
