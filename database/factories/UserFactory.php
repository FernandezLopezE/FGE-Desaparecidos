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
	$estadoCivil = App\:CatEstadoCivil::all()->pluck('id_CatEstadoCivil')->toArray();
	$nacionalidad = App\:CatNacionalidad::all()->pluck('id_CatNacionalidad')->toArray();
	$escolaridad = App\:CatEscolaridad::all()->pluck('id_CatEscolaridad')->toArray();

    return [
        'nombre' => $faker->name,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
		'apodo' => $faker->color,
		'edadAparente' => $faker->unique()->numberBetween($min = 1, $max = 87),
		'nacionalidad' => $faker->randomElement($nacionalidad),
		'edad' => $faker->unique()->numberBetween($min = 1, $max = 95),
		'fechaNacimiento' => $faker->date($format = 'd/m/Y', $max = ''),
		'estadoCivil' => $faker->randomElement($estadoCivil),
		'genero' => $faker->randomElement(['Masculino' ,'Femenino']),
		'embarazo' => $faker->randomElement(['Sí' ,'No']),
		'periodoGestacion' => $faker->unique()->numberBetween($min = 0, $max = 9),
		'rumores' => $faker->randomElement(['Sí' ,'No']),   
		'pormenores' => $faker->lorem,
		'escolaridad' => $faker->randomElement($escolaridad),
		'ocupacion' => $faker->


        'remember_token' => str_random(10),
    ];
});




