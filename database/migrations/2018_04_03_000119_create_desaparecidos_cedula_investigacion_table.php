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
            $table->string('entrevistadorNombres', 200)->nullable();
            $table->string('entrevistadorPrimerAp', 50)->nullable();
            $table->string('entrevistadorSegundoAp', 50)->nullable();
            $table->string('entrevistadorCargo', 250)->nullable();
            
            $table->string('interpreteNombres', 200)->nullable();
            $table->string('interpretePrimerAp', 50)->nullable();
            $table->string('interpreteSegundoAp', 50)->nullable();
            $table->string('interpreteOrganizacion', 50)->nullable();
            $table->string('otroDialecto', 50)->nullable();
            $table->enum('entrevistadorPrimeraVez', ['SI','NO']);
            $table->date('fechaVisita')->nullable();
            $table->string('calzadoTalla',50)->nullable();
            $table->text('observacionesDesaparicion')->nullable();
            $table->string('estatura',10)->nullable();
            $table->string('peso',10)->nullable();
            $table->json('objetos')->nullable();
            $table->string('modeloCalzado', 100)->nullable();
            $table->string('otroColorCalzado', 100)->nullable();
            $table->string('otroCalzado', 200)->nullable();
            $table->string('otraMarca', 200)->nullable();
            $table->integer('idCalzadotipo')->unsigned()->nullable();           
            $table->foreign('idCalzadotipo')->references('id')->on('cat_calzado_tipo');
            $table->integer('idCalzadocolor')->unsigned()->nullable();           
            $table->foreign('idCalzadocolor')->references('id')->on('cat_colores');
            $table->integer('idCalzadomarca')->unsigned()->nullable();           
            $table->foreign('idCalzadomarca')->references('id')->on('cat_calzado_marca');
            $table->integer('idComplexion')->unsigned()->nullable();           
            $table->foreign('idComplexion')->references('id')->on('cat_complexion');
            $table->integer('idColorPiel')->unsigned()->nullable();           
            $table->foreign('idColorPiel')->references('id')->on('cat_color_piel');
            //$table->integer('idCeja')->unsigned()->nullable();           
            //$table->foreign('idCeja')->references('id')->on('cat_cejas');
            $table->integer('idDialecto')->unsigned()->nullable();
            $table->foreign('idDialecto')->references('id')->on('cat_dialecto')->onDelete('cascade');
            $table->integer('idCedulaPartesCuerpo')->unsigned()->nullable();           
            $table->foreign('idCedulaPartesCuerpo')->references('id')->on('cedula_partes_cuerpo');
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