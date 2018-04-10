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
        factory(App\Models\CatCentroReclusion::class, 10)->create();
        /*factory(App\Models\Persona::class, 10)->create();
        factory(App\Models\Desaparecido::class, 10)->create();
        factory(App\Models\Domicilio::class, 10)->create();
        factory(App\Models\Familiar::class, 10)->create();
        factory(App\Models\Antecedente::class, 10)->create();
        factory(App\Models\Documento::class, 10)->create();*/
    }
}
