<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosCedulaInvestigacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_cedula_investigacion', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('primeravez', ['SI','NO']);
            $table->date('fecha')->nullable();

            $table->string('calzadoTalla',50);
            $table->text('observacionesDesaparicion');
            $table->string('estatura',10);
            $table->string('peso',10);

            $table->integer('idCalzadotipo')->unsigned();           
            $table->foreign('idCalzadotipo')->references('id')->on('cat_calzado_tipo');
            $table->integer('idCalzadocolor')->unsigned();           
            $table->foreign('idCalzadocolor')->references('id')->on('cat_calzado_color');
            $table->integer('idCalzadomarca')->unsigned();           
            $table->foreign('idCalzadomarca')->references('id')->on('cat_calzado_marca');
            $table->integer('idComplexion')->unsigned();           
            $table->foreign('idComplexion')->references('id')->on('cat_complexion');
            $table->integer('idColorPiel')->unsigned();           
            $table->foreign('idColorPiel')->references('id')->on('cat_color_piel');
            $table->integer('idCeja')->unsigned();           
            $table->foreign('idCeja')->references('id')->on('cat_cejas');

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
        Schema::dropIfExists('desaparecidos_cedula_investigacion');
    }
}
