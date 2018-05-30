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
			$table->string('otroParentesco',20)->nullable();
			$table->string('correoElectronico')->unique()->nullable();
			$table->text('telefonos')->nullable();			
			$table->boolean('tieneHijos')->default(0);
			$table->boolean('informante')->default(0);
			$table->boolean('notificaciones')->default(0);	
			$table->string('estatura')->nullable();
			$table->string('peso')->nullable();				


			$table->integer('idPersona')->unsigned();
			$table->foreign('idPersona')->references('id')->on('persona');
			$table->integer('idEdocivil')->unsigned()->nullable();
			$table->foreign('idEdocivil')->references('id')->on('cat_estado_civil');
			$table->integer('idOcupacion')->unsigned()->nullable();
			$table->foreign('idOcupacion')->references('id')->on('cat_ocupacion')->onDelete('cascade');	
			$table->integer('idEscolaridad')->unsigned()->nullable();
			$table->foreign('idEscolaridad')->references('id')->on('cat_escolaridad')->onDelete('cascade');
			$table->integer('idDialecto')->unsigned()->nullable();
			$table->foreign('idDialecto')->references('id')->on('cat_dialecto')->onDelete('cascade');
			$table->integer('idCargo')->unsigned()->nullable();
			$table->foreign('idCargo')->references('id')->on('cat_cargo')->onDelete('cascade');
			$table->integer('idParentesco')->unsigned()->nullable();
			$table->foreign('idParentesco')->references('id')->on('cat_parentesco')->onDelete('cascade');
			$table->integer('idDocumentoIdentidad')->unsigned()->nullable();
			$table->foreign('idDocumentoIdentidad')->references('id')->on('cat_documento_identidad')->onDelete('cascade');
			$table->integer('idCedula')->unsigned();
			$table->foreign('idCedula')->references('id')->on('desaparecidos_cedula_investigacion')->onDelete('cascade');
			$table->integer('idComplexion')->unsigned()->nullable();
			$table->foreign('idComplexion')->references('id')->on('cat_complexion');
			$table->integer('idColorPiel')->unsigned()->nullable();
			$table->foreign('idColorPiel')->references('id')->on('cat_color_piel');

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
