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



$factory->define(App\DomicilioDesaparecido::class, function (Faker $faker) {


	$departamentos = App\Departamento::all()->pluck('id')->toArray();
	$turnos = App\Turno::all()->pluck('id')->toArray();



    return [

		'tipoDireccion' => $faker->randomElement(['Personal','Trabajo']),
    	'idMunicipio' => $faker->sentence(2),
    	'idLocalidad' => $faker->sentence(2),
    	'idColonia' => $faker->sentence(2),
    	'calle' => $faker->sentence(3),
    	'numExterno' => $faker->numberBetween($min=1,$max =300),
    	'numInterno' => $faker->numberBetween($min=1,$max =300),
    	'telefono' => $faker->numberBetween($min=2281200000,$max =2288999999)
    ];
 });


