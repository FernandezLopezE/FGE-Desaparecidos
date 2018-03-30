<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosPersonasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('desaparecidos_personas', function (Blueprint $table) {
			$table->increments('id');
			$table->string('apodo', 50)->nullable();
			$table->string('edadAparente', 20)->nullable();			
			$table->enum('embarazo', ['NO','SI', 'LO IGNORAN']);
			$table->string('gestacionSemanas')->default(0);
			$table->string('gestacionMeses')->default(0);
			$table->enum('rumoresBebe',['SI','NO','LO IGNORAN']);
			$table->string('pormenores');
			$table->boolean('antecedentesJudiciales')->default(0);

			$table->integer('idPersona')->unsigned();			
			$table->foreign('idPersona')->references('id')->on('persona');
			$table->integer('idEdocivil')->unsigned();
			$table->foreign('idEdocivil')->references('id')->on('cat_estado_civil');
			$table->integer('idOcupacion')->unsigned();
			$table->foreign('idOcupacion')->references('id')->on('cat_ocupacion')->onDelete('cascade');	
			$table->integer('idEscolaridad')->unsigned();
			$table->foreign('idEscolaridad')->references('id')->on('cat_escolaridad')->onDelete('cascade');

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
		Schema::dropIfExists('desaparecidos_personas');
	}
}
