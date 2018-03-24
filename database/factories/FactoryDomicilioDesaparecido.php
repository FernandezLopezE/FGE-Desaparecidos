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




    $factory->define(App\Models\DomicilioDesaparecido::class, function (Faker $faker) {


	

	$municipios = App\Models\CatMunicipio::all()->pluck('id')->toArray();
    $localidades = App\Models\CatLocalidad::all()->pluck('id')->toArray();
    $colonias = App\Models\CatColonia::all()->pluck('id')->toArray();



    return [

		'tipoDireccion' => $faker->randomElement(['Personal','Trabajo']),
    	'idMunicipio' => $faker->randomElement($municipios),
    	'idLocalidad' => $faker->randomElement($localidades),
    	'idColonia' => $faker->randomElement($colonias),
    	'calle' => $faker->streetAdress(),
    	'numExterno' => $faker->numberBetween($min=1,$max =300),
    	'numInterno' => $faker->numberBetween($min=1,$max =300),
    	'telefono' => $faker->numberBetween($min=2281200000,$max =2288999999)
    ];
 });


