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
            $table->string('carpeta', 50)->nullable();
            $table->string('interpreteNombres', 200)->nullable();
            $table->string('interpretePrimerAp', 50)->nullable();
            $table->string('interpreteSegundoAp', 50)->nullable();
            $table->string('interpreteOrganizacion', 50)->nullable();
            $table->string('otroDialecto', 50)->nullable();
            $table->enum('entrevistadorPrimeraVez', ['SI','NO']);
            $table->date('fechaVisita')->nullable();
            $table->text('desaparicionObservaciones')->nullable();
            $table->datetime('desaparicionFecha')->nullable();
            $table->integer('idEstadoDesaparicion')->unsigned()->default(30);
            $table->foreign('idEstadoDesaparicion')->references('id')->on('cat_estado')->onDelete('cascade');
            $table->integer('idMunicipioDesa')->unsigned()->default(2496);
            $table->foreign('idMunicipioDesa')->references('id')->on('cat_municipio')->onDelete('cascade');
            $table->integer('idLocalidadDesapa')->unsigned()->default(108971);
            $table->foreign('idLocalidadDesapa')->references('id')->on('cat_localidad')->onDelete('cascade');
            $table->string('referenciaLugar', 200)->nullable();
            $table->string('vehiculoDescripcion', 250)->nullable();
            $table->integer('idDialecto')->unsigned()->nullable();
            $table->foreign('idDialecto')->references('id')->on('cat_dialecto')->onDelete('cascade');

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