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
			$table->string('edadAparente', 50)->nullable();
			$table->string('edadExtravio', 50)->nullable();
			$table->enum('embarazo', ['NO','SI', 'LO IGNORAN']);
			$table->enum('tipoGestacion',['SEMANAS','MESES',])->nullable();
			$table->char('numGestacion',1)->nullable();
			$table->enum('rumoresBebe',['SI','NO','LO IGNORAN'])->default('NO');
			$table->text('pormenores')->nullable();
			$table->boolean('antecedentesJudiciales')->nullable();
			$table->string('organizacion')->nullable();
			$table->enum('tipoPersona', ['ENTREVISTADOR','INTERPRETE','INFORMANTE','AUTORIZADAS', 'DESAPARECIDA', 'AVISTO']);
			$table->string('otroDocIdentidad',20)->nullable();
			$table->string('numDocIdentidad',20)->nullable();
			$table->string('correoElectronico')->unique();
			$table->json('telefonos')->nullable();
			$table->boolean('notificaciones')->default(0);
			$table->boolean('tieneHijos')->default(0);


			$table->integer('idPersona')->unsigned();
			$table->foreign('idPersona')->references('id')->on('persona');
			$table->integer('idEdocivil')->unsigned();
			$table->foreign('idEdocivil')->references('id')->on('cat_estado_civil');
			$table->integer('idOcupacion')->unsigned();
			$table->foreign('idOcupacion')->references('id')->on('cat_ocupacion')->onDelete('cascade');	
			$table->integer('idEscolaridad')->unsigned();
			$table->foreign('idEscolaridad')->references('id')->on('cat_escolaridad')->onDelete('cascade');
			$table->integer('idDialecto')->unsigned();
			$table->foreign('idDialecto')->references('id')->on('cat_dialecto')->onDelete('cascade');
			$table->integer('idCargo')->unsigned();
			$table->foreign('idCargo')->references('id')->on('cat_cargo')->onDelete('cascade');
			$table->integer('idParentesco')->unsigned();
			$table->foreign('idParentesco')->references('id')->on('cat_parentesco')->onDelete('cascade');
			$table->integer('idDocumentoIdentidad')->unsigned();
			$table->foreign('idDocumentoIdentidad')->references('id')->on('cat_documento_identidad')->onDelete('cascade');
			$table->integer('idCedula')->unsigned();
			$table->foreign('idCedula')->references('id')->on('desaparecidos_cedula_investigacion')->onDelete('cascade');

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
