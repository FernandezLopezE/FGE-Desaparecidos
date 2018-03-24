<?php

use Illuminate\Database\Seeder;
use App\PersonaDesaparecida;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PersonaDesaparecida::class,10)->create();
    }
}
