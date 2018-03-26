<?php

use Illuminate\Database\Seeder;
use App\Models\Antecedente;

class AntecedenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Antecedente::class, 10)->create();
        

    }
}
