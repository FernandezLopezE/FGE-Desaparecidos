<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosDesaparecidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios_desaparecidos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipoDireccion', ['Personal','Trabajo']);            
            $table->string('calle', 100)->default("SIN INFORMACION");
            $table->string('numExterno', 10)->default('S/N');
            $table->string('numInterno', 10)->default('S/N');
            $table->string('telefono', 20)->default('S/N');            
            
            $table->integer('idMunicipio')->unsigned()->default(2496);
            $table->foreign('idMunicipio')->references('id')->on('cat_municipio')->onDelete('cascade');
            $table->integer('idLocalidad')->unsigned()->default(108971);
            $table->foreign('idLocalidad')->references('id')->on('cat_localidad')->onDelete('cascade');
            $table->integer('idColonia')->unsigned()->default(49172);
            $table->foreign('idColonia')->references('id')->on('cat_colonia')->onDelete('cascade');
            $table->integer('idPersona')->unsigned()->default(2496);
            $table->foreign('idPersona')->references('id')->on('persona_desaparecidos')->onDelete('cascade');

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
        Schema::dropIfExists('domicilios_desaparecidos');
    }
}
