<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDesaparecidosPrendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_prendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo',50)->nullable();
            $table->string('material',50)->nullable();
            //$table->string('color',50);
            $table->string('otroColor')->nullable();
            $table->string('dibujoBordadoFranja',50)->nullable();
            $table->string('marcaOrigen',50)->nullable();
            $table->string('talla',50)->nullable();
            $table->integer('color')->unsigned();
            $table->foreign('color')->references('id')->on('cat_colores');
            $table->integer('idCedula')->unsigned();
            $table->foreign('idCedula')->references('id')->on('desaparecidos_cedula_investigacion');
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
        Schema::dropIfExists('desaparecidos_prendas');
    }
}
