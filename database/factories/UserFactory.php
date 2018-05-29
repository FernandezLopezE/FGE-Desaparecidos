<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
//$faker = Faker\Factory::create('es_ES');

$factory->define(App\User::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Models\CatCentroReclusion::class, function (Faker $faker) {
	return [
		'nombre' => $faker->company,
	];
});
/*************************************************************************************/
							//CEDULA
/*************************************************************************************/
$factory->define(App\Models\Cedula::class, function (Faker $faker) {
	$nacionalidades = App\Models\CatNacionalidad::all()->pluck('id')->toArray();
	$nacionalidad = 1;
	$estado = 30;
	$municipios = App\Models\CatMunicipio::where('idEstado',$estado)->pluck('id')->toArray();//::all()->pluck('id')->toArray();
	$localidades = App\Models\CatLocalidad::whereIn('idMunicipio',$municipios)->pluck('id')->toArray();
	$dialecto = 1;
	//$faker->addProvider(new Faker\Provider\es_ES\Person($faker));
	return [
		'entrevistadorNombres' => $faker->name,
		'entrevistadorPrimerAp' => $faker->lastName,
		'entrevistadorSegundoAp' => $faker->lastName,
		'entrevistadorCargo' => $faker->company,
		//'interpreteNombres' => $faker->name,
		//'interpretePrimerAp' => $faker->lastName,
		//'interpreteSegundoAp' => $faker->lastName,
		//'interpreteOrganizacion'  => str_random(50),
		//'otroDialecto'=> str_random(50),
		'entrevistadorPrimeraVez' => $faker->randomElement(['NO','SI']),
		'fechaVisita' => $faker->date($format = 'd/m/Y', $max = ''),
		//'calzadoTalla' => $faker->randomElement(['CHICA','MEDIANA','GRANDE']),
		'desaparicionObservaciones' => str_random(50),
		'desaparicionFecha' => $faker->date($format = 'd/m/Y H:i:s', $max = ''),
		//'idEstadoDesaparicion' => $estado,
		//'idMunicipioDesa' => $faker->randomElement($municipios),
		//'idLocalidadDesapa' => $faker->randomElement($localidades),
		//'referenciaLugar' => str_random(50),
		//'vehiculoDescripcion'=> str_random(50),
		//'objetos' => str_random(50),
		//'modeloCalzado' => str_random(50),
		//'otroColorCalzado' => str_random(50),
		//'otroCalzado' => str_random(10),
		//'otraMarca' => str_random(10),
		//'idCalzadotipo' => $faker->randomElement($calzadoTipo),
		//'idCalzadocolor' =>$faker->randomElement($calzadoColor),
		//'idCalzadomarca' => $faker->randomElement($calzadoMarca),
		'idDialecto' => $dialecto,
	];
});

/*************************************************************************************/
							//PERSONA
/*************************************************************************************/

$factory->define(App\Models\Persona::class, function (Faker $faker) {
	$nacionalidades = App\Models\CatNacionalidad::all()->pluck('id')->toArray();
	$nacionalidad = 1;
	$estado = 30;
	$municipio = 2496;//App\Models\CatMunicipio::whereIn('idEstado',$estado)->pluck('id');
	//$faker->addProvider(new Faker\Provider\es_ES\Person($faker));
	return [
		'nombres' => $faker->name,
		'primerAP' => $faker->lastName,
		'segundoAP' => $faker->lastName,
		'fechaNacimiento' => $faker->date($format = 'd/m/Y', $max = ''),
		'curp' => str_random(18),
		'sexo' => $faker->randomElement(['H', 'M']),
		//'rfc' => str_random(8),
		'idNacionalidad' => $nacionalidad,
		//'idEtnia' => $faker->randomElement($ocupaciones),
		//'idLengua' => $faker->randomElement($parentesco
		'idEstadoOrigen' => $estado,
	    'idMunicipioOrigen' => $municipio,
	];
});

/*************************************************************************************/
							//DESAPARECIDO
/*************************************************************************************/
$factory->define(App\Models\Desaparecido::class, function (Faker $faker) {
	$estadoscivil = App\Models\CatEstadoCivil::all()->pluck('id')->toArray();
	$ocupaciones = App\Models\CatOcupacion::all()->pluck('id')->toArray();
	$escolaridades = App\Models\CatEscolaridad::all()->pluck('id')->toArray();
	$dialecto = App\Models\CatDialecto::all()->pluck('id')->toArray();
	$cargo = App\Models\CatCargo::all()->pluck('id')->toArray();
	$parentesco = App\Models\CatParentesco::all()->pluck('id')->toArray();
	$docIdentidad = App\Models\CatDocumento::all()->pluck('id')->toArray();
	$complexion = App\Models\CatComplexion::all()->pluck('id')->toArray();
	$colorpiel = App\Models\CatColorPiel::all()->pluck('id')->toArray();
	$personas = App\Models\Persona::all()->pluck('id')->toArray();
	$cedula = App\Models\Cedula::all()->pluck('id')->toArray();

	$embarazoNo = 'NO';
	$tipoPersona = 'DESAPARECIDA';
	$tieneHijos = 0;
	$informante = 0;
	$notificaciones = 0;
	return [
		'apodo' => $faker->name,
		'edadAparente' => $faker->numberBetween($min = 1, $max = 120),
		'edadExtravio' => $faker->numberBetween($min = 1, $max = 120),
		'embarazo' => $embarazoNo, //$faker->randomElement(['NO','SI', 'LO IGNORAN']),
		//'numGestacion' => $faker->numberBetween($min = 1, $max = 33),
		//'gestacionSemanas' => $faker->numberBetween($min = 1, $max = 9),
		//'gestacionMeses' => $faker->numberBetween($min = 1, $max = 9),
		'rumoresBebe' => $embarazoNo,//$faker->randomElement(['SI','NO','LO IGNORAN']),
		//'pormenores' => $faker->sentence(10),
		//'antecedentesJudiciales' => $faker->randomElement([0 ,1]),
		'tipoPersona' => $faker->randomElement(['INFORMANTE','DESAPARECIDA']),
		'numDocIdentidad' => str_random(20),
		'correoElectronico' => $faker->unique()->safeEmail,
		//'telefonos' => str_random(20),
		'tieneHijos' => $tieneHijos,
		'informante'  => $informante,
		'notificaciones'  => $notificaciones,
		'estatura' => $faker->numberBetween($min = 10, $max = 210),
		'peso' => $faker->numberBetween($min = 1, $max = 120),
		'idEdocivil' => $faker->randomElement($estadoscivil),
		'idOcupacion' => $faker->randomElement($ocupaciones),
		'idEscolaridad' => $faker->randomElement($escolaridades),
		'idPersona' => factory('App\Models\Persona')->create()->id,
		//'idDialecto' => $faker->randomElement($dialecto),
		//'idCargo' => $faker->randomElement($cargo),
		//'idParentesco' => $faker->randomElement($personas),
		'idDocumentoIdentidad' => $faker->randomElement($docIdentidad),
		'idCedula' => factory('App\Models\Cedula')->create()->id,
		//'company_id' => factory('App\ContactCompany')->create()->id,
		'idComplexion' => $faker->randomElement($complexion),
		'idColorPiel' => $faker->randomElement($colorpiel),
	];
});
/*
$factory->define(App\Models\Familiar::class, function (Faker $faker) {

	$desaparecidos = App\Models\Persona::all()->pluck('id')->toArray();
	return [
		'parentesco' => $faker->randomElement(['Madre', 'Padre', 'Hijo']),
		'nombres' => $faker->name,
		'primerAp' => $faker->lastName,
		'segundoAp' => $faker->lastName,
		'edad' => $faker->numberBetween($min = 1, $max = 120),
		'idDesaparecido' => $faker->randomElement($desaparecidos)
	];
});

$factory->define(App\Models\Antecedente::class, function (Faker $faker) {
	$desaparecidos = App\Models\Desaparecido::all()->pluck('id')->toArray();
	$delitos = App\Models\CatDelito::all()->pluck('id')->toArray();
	$centros = App\Models\CatCentroReclusion::all()->pluck('id')->toArray();

	return [
		'mes' =>$faker->randomElement(['1', '2', '3','4','5','6','7','8','9','10','11','12']),
		'anio' => $faker->year,
		'observaciones' => $faker->sentence(10),
		'idDesaparecido' => $faker->randomElement($desaparecidos),
		'idDelito' => $faker->randomElement($delitos),
		'idCentroReclusion' => $faker->randomElement($centros),
	];
});*/


$factory->define(App\Models\Domicilio::class, function (Faker $faker) {
	//$estados = App\Models\CatEstado::all()->pluck('id')->toArray();
	$estado = 30;
	$municipios = App\Models\CatMunicipio::where('idEstado',$estado)->pluck('id')->toArray();//::all()->pluck('id')->toArray();
	$localidades = App\Models\CatLocalidad::whereIn('idMunicipio',$municipios)->pluck('id')->toArray();
	$colonias = App\Models\CatColonia::whereIn('idMunicipio',$municipios)->pluck('id')->toArray();
	$codigos = App\Models\CatColonia::whereIn('idMunicipio',$municipios)->pluck('id')->toArray();
	//$desaparecidos = App\Models\Desaparecido::all()->pluck('id')->toArray();



	return [
		'tipoDireccion' => $faker->randomElement(['PERSONAL','TRABAJO','FAMILIAR']),
		'calle' => $faker->cityPrefix,
		'numExterno' => $faker->numberBetween($min = 1, $max = 1500),
		//'numInterno' => $faker->numberBetween($min = 1, $max = 1500),
		//'telefono' => $faker->phoneNumber,
		'idEstado' => $estado,//$faker->randomElement($municipios),
		'idMunicipio' => $faker->randomElement($municipios),//$faker->numberBetween($min = 2088, $max = 2299),
		'idLocalidad' => $faker->randomElement($localidades),
		'idColonia' => $faker->randomElement($colonias),
		'idCodigoPostal' => $faker->randomElement($codigos),
		'idDesaparecido' => factory('App\Models\Desaparecido')->create()->id,
	];
});

/*
$factory->define(App\Models\CedulaPartesCuerpo::class, function (Faker $faker) {
	//$estados = App\Models\CatEstado::all()->pluck('id')->toArray();
	$estado = 30;
	$partesCuerpo = App\Models\CatPartesCuerpo::all()->pluck('id')->toArray();
	$coloresCuerpo = App\Models\CatColoresCuerpo::whereIn('idPartesCuerpo',$partesCuerpo)->pluck('id')->toArray();
	$desaparecidos = App\Models\Desaparecido::all()->pluck('id')->toArray();

	return [
		'lado'=> $faker->randomElement(['IZQUIERDO','DERECHO','AMBOS']),
		'observaciones ' => str_random(30),
		//'otraParticularidad',
		//'otraModificacion',
		//'otroColor',
		'idPartesCuerpo'=> $faker->randomElement($partesCuerpo),
		'idColoresCuerpo' => $faker->randomElement($coloresCuerpo),
		'idPersonaDesaparecida'=> factory('App\Models\Desaparecido')->create()->id,
	];
});

$factory->define(App\Models\PivotSubPartiCuerpo::class, function (Faker $faker) {
	$subParticularidades = App\Models\CatSubParticularidades::all()->pluck('id')->toArray();

	return [
		'idCedulaPartesCuerpo'=> factory('App\Models\CedulaPartesCuerpo')->create()->id,
		'idSubParticularidades'=> $faker->randomElement($subParticularidades),
	];
});


$factory->define(App\Models\PivotSubModiCuerpo::class, function (Faker $faker) {
	$subModificaciones = App\Models\CatModificaciones::all()->pluck('id')->toArray();

	return [
		'idCedulaPartesCuerpo'=> factory('App\Models\CedulaPartesCuerpo')->create()->id,
		'idSubModificaciones'=> $faker->randomElement($subModificaciones),
	];
});*/

/*
$factory->define(App\Models\Documento::class, function (Faker $faker) {
	$desaparecidos = App\Models\Desaparecido::all()->pluck('id')->toArray();

	return [
		'identificacion' => $faker->randomElement(['IFE','Licencia','Tarjetón','Cartilla','Pasaporte']),
		'otraIdentificacion' => $faker->sentence(2),
		'numIdentificacion' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
		'idDesaparecido' => $faker->randomElement($desaparecidos)
	];
});
*/
