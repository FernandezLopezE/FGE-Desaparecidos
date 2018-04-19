<?php

use Illuminate\Database\Seeder;

class CatEnfermedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_enfermedades')->insert([
            ['nombre' => 'ESQUIZOFRENIA'], 	//1
            ['nombre' => 'MENTALES'],			//2
            ['nombre' => 'DIABETES'],			//3
            ['nombre' => 'HIPERTENSIÓN'],				//4
            ['nombre' => 'ARTRITIS'],
            ['nombre' => 'CIRROSIS'],
            ['nombre' => 'HEPATITIS'],
            ['nombre' => 'CÁNCER'],
            ['nombre' => 'VIH'],
            ['nombre' => 'DERMATITIS'],
            ['nombre' => 'HERPES'],
            ['nombre' => 'SORIASIS'],	//5
            ['nombre' => 'HONGOS'],
            ['nombre' => 'OTRO'],				//12
            
        ]);
    }
}
