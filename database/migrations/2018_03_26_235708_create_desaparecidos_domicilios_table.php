<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipoDireccion', ['Personal','Trabajo']); 
            $table->string('calle', 100)->default("SIN INFORMACION");
            $table->string('numExterno', 10)->default('S/N');
            $table->string('numInterno', 10)->default('S/N');
            $table->string('telefono', 30)->default('S/N');

            $table->integer('idMunicipio')->unsigned()->default(2496);
            $table->foreign('idMunicipio')->references('id')->on('cat_municipio')->onDelete('cascade');
            $table->integer('idLocalidad')->unsigned()->default(108971);
            $table->foreign('idLocalidad')->references('id')->on('cat_localidad')->onDelete('cascade');
            $table->integer('idColonia')->unsigned()->default(49172);
            $table->foreign('idColonia')->references('id')->on('cat_colonia')->onDelete('cascade'); 
            $table->integer('idDesaparecido')->unsigned()->default(49172);
            $table->foreign('idDesaparecido')->references('id')->on('desaparecidos_personas')->onDelete('cascade');            

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
        Schema::dropIfExists('desaparecidos_domicilios');
    }
}
