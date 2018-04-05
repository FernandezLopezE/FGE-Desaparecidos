<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosDocumentosIdentidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_documentos_identidad', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('identificacion',['IFE','Cartilla SM','Licencia','Tarjetón','Cartilla','Pasaporte','Otro(especifique)']);
            $table->string('otraIdentificacion')->nullable();
            $table->string('numIdentificacion');

            $table->integer('idDesaparecido')->unsigned();
            $table->foreign('idDesaparecido')->references('id')->on('desaparecidos_personas');
            
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
        Schema::dropIfExists('desaparecidos_documentos_identidad');
    }
}
