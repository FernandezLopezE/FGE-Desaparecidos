<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosIdentidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documentos_identidad', function (Blueprint $table){
            $table->increments('id');
            $table->enum('identificacion',['IFE','Cartilla SM','Licencia','Trajetón','Cartilla','Pasaporte','Otro(especifique)']);
            $table->string('otraIdentificacion');
            $table->string('noIdentificacion');
            $table->integer('idPersonaDesaparecida')->unsigned();
            $table->foreign('idPersonaDesaparecida')->references('id')->on('nombre_desaparecidos');
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
        Schema::dropIfExists('documentos_identidad');
    }
}
