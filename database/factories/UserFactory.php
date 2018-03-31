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


$factory->define(App\Models\Persona::class, function (Faker $faker) {	
	$nacionalidades = App\Models\CatNacionalidad::all()->pluck('id')->toArray();

	return [
		'nombres' => $faker->name,
		'primerAP' => $faker->lastName,
		'segundoAP' => $faker->lastName,
		'fechaNacimiento' => $faker->date($format = 'd/m/Y', $max = ''),
		'curp' => str_random(18),
		'rfc' => str_random(8),
		'idNacionalidad' => $faker->randomElement($nacionalidades),
		//'idEtnia' => $faker->randomElement($ocupaciones),
		//'idLengua' => $faker->randomElement($parentesco),		
	];
});

$factory->define(App\Models\Desaparecido::class, function (Faker $faker) {	
	$estadoscivil = App\Models\CatEstadoCivil::all()->pluck('id')->toArray();
	$ocupaciones = App\Models\CatOcupacion::all()->pluck('id')->toArray();
	$escolaridades = App\Models\CatEscolaridad::all()->pluck('id')->toArray();
	$personas = App\Models\Persona::all()->pluck('id')->toArray();

	return [
		'apodo' => $faker->name,		
		'edadAparente' => $faker->numberBetween($min = 1, $max = 120),		
		'embarazo' => $faker->randomElement(['NO','SI', 'LO IGNORAN']),
		'gestacionSemanas' => $faker->numberBetween($min = 1, $max = 9),
		'gestacionMeses' => $faker->numberBetween($min = 1, $max = 9),
		'rumoresBebe' => $faker->randomElement(['SI','NO','LO IGNORAN']),
		'pormenores' => $faker->sentence(10),
		'antecedentesJudiciales' => $faker->randomElement([0 ,1]),
		'idEdocivil' => $faker->randomElement($estadoscivil),				
		'idOcupacion' => $faker->randomElement($ocupaciones),		
		'idEscolaridad' => $faker->randomElement($escolaridades),
		'idPersona' => $faker->randomElement($personas)	
	];
});

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
});

$factory->define(App\Models\Domicilio::class, function (Faker $faker) {	
	$estados = App\Models\CatEstado::all()->pluck('id')->toArray();
	$municipios = App\Models\CatMunicipio::all()->pluck('id')->toArray();
	$localidades = App\Models\CatLocalidad::all()->pluck('id')->toArray();
	$colonias = App\Models\CatColonia::all()->pluck('id')->toArray();
	$codigos = App\Models\CatColonia::all()->pluck('id')->toArray();
	$desaparecidos = App\Models\Persona::all()->pluck('id')->toArray();

	return [
		'tipoDireccion' => $faker->randomElement(['Personal','Trabajo']),
		'calle' => $faker->cityPrefix,
		'numExterno' => $faker->numberBetween($min = 1, $max = 1500),
		'numInterno' => $faker->numberBetween($min = 1, $max = 1500),
		'telefono' => $faker->phoneNumber,
		'idMunicipio' => $faker->randomElement($municipios),
		'idMunicipio' => $faker->randomElement($municipios),
		'idLocalidad' => $faker->randomElement($localidades),
		'idColonia' => $faker->randomElement($colonias),
		'idCodigoPostal' => $faker->randomElement($codigos),
		'idDesaparecido' => $faker->randomElement($desaparecidos)
	];
});

$factory->define(App\Models\Documento::class, function (Faker $faker) {
	$desaparecidos = App\Models\Desaparecido::all()->pluck('id')->toArray();

	return [
		'identificacion' => $faker->randomElement(['IFE','Licencia','Tarjetón','Cartilla','Pasaporte']),
		'otraIdentificacion' => $faker->sentence(2),
		'numIdentificacion' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
		'idDesaparecido' => $faker->randomElement($desaparecidos)
	];
});




