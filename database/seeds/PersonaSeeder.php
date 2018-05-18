<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //factory(App\Models\CatCentroReclusion::class, 10)->create();
       /* factory(App\Models\Persona::class, 10)->create();
        factory(App\Models\Desaparecido::class, 10)->create();
        factory(App\Models\Domicilio::class, 10)->create();
        factory(App\Models\Familiar::class, 10)->create();
        factory(App\Models\Antecedente::class, 10)->create();
        factory(App\Models\Documento::class, 10)->create();*/

        //factory(\App\Models\Plan::class, 3)->create()->each(function ($planes) {
        //planes->auditorias()->save(factory(\App\Models\Auditoria::class)->make());

        factory(App\Models\Cedula::class, 10)->create()->each(function ($cedula){
        $cedula->desaparecidos()->save(factory(App\Models\Desaparecido::class)->make());
        });

       // factory(App\Models\Persona::class, 5)->create()->each(function ($persona){
        //$persona->desaparecidos()->save(factory(App\Models\Desaparecido::class)->make());
        //});

        factory(App\Models\Desaparecido::class, 10)->create()->each(function ($desaparecido){
        $desaparecido->domicilios()->save(factory(App\Models\Domicilio::class)->make());
        });



    }
}


