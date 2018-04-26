<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosContactoTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('desaparecidos_contacto', function (Blueprint $table) {
			$table->increments('id');
			$table->string('correoElectronico', 50)->nullable();
			
			$table->json('telefono')->nullable();
			$table->json('redesSociales', 200)->nullable();
			//$table->foreign('redesSociales')->references('id')->on('cat_redes_sociales');
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
		Schema::dropIfExists('desaparecidos_contacto');
	}
}
