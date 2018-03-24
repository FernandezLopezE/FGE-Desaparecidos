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
        'idPersonaDesaparecida' = $faker->randomElement($persona);
        'idDelito' = $faker->randomElement($delito);
        'idCentroReclusion' = $faker->randomElement($centro);
    ];
});



//hola


