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


$factory->define(App\PersonaDesaparecida::class, function (Faker $faker) {
	$estadosCivil = App\Models\CatEstadoCivil::all()->pluck('id')->toArray();
	$nacionalidades = App\Models\CatNacionalidad::all()->pluck('id')->toArray();
	$escolaridades = App\Models\CatEscolaridad::all()->pluck('id')->toArray();
    $ocupaciones = App\Models\CatOcupacion::all()->pluck('id')->toArray();
    $parentesco =  App\Parentesco::all()->pluck('id')->toArray();

    return [
        'nombre' => $faker->name,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
		'apodo' => $faker->lastName,
		'edadAparente' => '10',
		'id_nacionalidad' => $faker->randomElement($nacionalidades),
		'edad' => '15',
		'fechaNacimiento' => $faker->date($format = 'd/m/Y', $max = ''),
		'id_edocivil' => $faker->randomElement($estadosCivil),
		'genero' => $faker->randomElement(['Masculino' ,'Femenino']),
		'embarazo' => $faker->randomElement(['Sí' ,'No']),
		'periodoGestacion' => $faker->unique()->numberBetween($min = 0, $max = 9),
		'rumores' => $faker->randomElement(['Sí' ,'No']),   
		'pormenores' => $faker->sentence(10),
		'escolaridad' => $faker->randomElement($escolaridades),
		'ocupacion' => $faker->randomElement($ocupaciones),
        'id_parentesco' => $faker->randomElement($parentesco),
    ];
});


$factory->define(App\Models\DomicilioDesaparecido::class, function (Faker $faker) {

        $municipios = App\Models\CatMunicipio::all()->pluck('id')->toArray();
        $localidades = App\Models\CatLocalidad::all()->pluck('id')->toArray();
        $colonias = App\Models\CatColonia::all()->pluck('id')->toArray();

        return [

            'tipoDireccion' => $faker->randomElement(['Personal','Trabajo']),
            'idMunicipio' => $faker->randomElement($municipios),
            'idLocalidad' => $faker->randomElement($localidades),
            'idColonia' => $faker->randomElement($colonias),
            'calle' => $faker->streetAdress,
            'numExterno' => $faker->numberBetween($min=1,$max =300),
            'numInterno' => $faker->numberBetween($min=1,$max =300),
            'telefono' => $faker->numberBetween($min=2281200000,$max =2288999999)
        ];
});

$factory->define(App\Documento::class, function (Faker $faker) {
    $persona = App\Persona::all()->pluck('id')->toArray();

    return [
        'identificacion' => $faker->randomElement(['IFE','Licencia','Tarjetón','Cartilla','Pasaporte']),
        'otraIdentificacion' => $faker->sentences(2),
        'noIndetificacion' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
        'idPersonaDesaparecida' => $faker->randomElement($persona),
    ];
});

$factory->define(App\CentroReclusion::class, function (Faker $faker) {
    

    return [
        'centroReclusion' => $faker->company,
        
    ];
});

$factory->define(App\Antecedente::class, function (Faker $faker) {
    $persona = App\Persona::all()->pluck('id')->toArray();
    $delito = App\CatDelito::all()->pluck('id')->toArray();
    $centro = App\CentroReclusion::all()->pluck('id')->toArray();

    return [
        'antecedentes' => $faker->boolean,
        'mes' => $faker->monthName,
        'anio' => $faker->year,
        'observaciones' => $faker->sentence(4),
        'idPersonaDesaparecida' => $faker->randomElement($persona),
        'idDelito' => $faker->randomElement($delito),
        'idCentroReclusion' => $faker->randomElement($centro),
    ];
});

$factory->define(App\Parentesco::class, function (Faker $faker) {

    return [
        'nombre' => $faker->name,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
        'edad' => $faker->unique()->numberBetween($min = 1, $max = 95),
        'parentesco' => 'Madre',

    ];
});