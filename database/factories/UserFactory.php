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
/*
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
                'calle' => $faker->streetAdress,
                'numExterno' => $faker->numberBetween($min=1,$max =300),
                'numInterno' => $faker->numberBetween($min=1,$max =300),
                'telefono' => $faker->numberBetween($min=2281200000,$max =2288999999)
            ];
 });


<<<<<<< HEAD
=======

>>>>>>> 6bd13a9b506be98de276f7f2414fde41c5640192


