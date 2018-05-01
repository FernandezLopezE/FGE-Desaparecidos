<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidoDentaduraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecido_dentadura', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idTamanoDiente')->unsigned()->nullable();           
            $table->foreign('idTamanoDiente')->references('id')->on('cat_tamano_diente');


            $table->enum('dienteCompleto', ['SIN INFORMACION','NO','SI']);
            $table->enum('asistioDentista', ['SIN INFORMACION','NO','SI']);
            $table->enum('tieneInfoDentista', ['SIN INFORMACION','NO','SI']);

            $table->json('tratamientos')->nullable();

            $table->enum('perdiodiente', ['SIN INFORMACION','NO','SI']);
            
            $table->enum('higieneBucal', ['SIN INFORMACION','NO','SI']);
            $table->string('describeHigBucal')->nullable();

            $table->enum('caries', ['SIN INFORMACION','NO','SI']);
            $table->string('describeCaries')->nullable();

            $table->enum('abcesos', ['SIN INFORMACION','NO','SI']);
            $table->string('describeAbcesos')->nullable();

            $table->json('enfermedades')->nullable();

            $table->enum('maloshabitos', ['SIN INFORMACION','NO','SI']);
            $table->json('arraymaloshabitos')->nullable();

            $table->integer('idTipoPerfil')->unsigned()->nullable();           
            $table->foreign('idTipoPerfil')->references('id')->on('cat_tipo_perfil');

            $table->integer('idTipoMordida')->unsigned()->nullable();           
            $table->foreign('idTipoMordida')->references('id')->on('cat_tamano_diente');

            $table->integer('idTipoSonrisa')->unsigned()->nullable();           
            $table->foreign('idTipoSonrisa')->references('id')->on('cat_tipo_sonrisa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desaparecido_dentadura');
    }
}
