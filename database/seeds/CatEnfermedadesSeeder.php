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
           // ['nombre' => 'SIN INFORMACION'], //1
            ['nombre' => 'ESQUIZOFRENIA'], 	    //2
            ['nombre' => 'MENTALES'],			//3
            ['nombre' => 'DIABETES'],			//4
            ['nombre' => 'HIPERTENSIÓN'],		//5
            ['nombre' => 'ARTRITIS'],   //6
            ['nombre' => 'CIRROSIS'],   //7
            ['nombre' => 'HEPATITIS'],  //8
            ['nombre' => 'CÁNCER'],     //9
            ['nombre' => 'VIH'],        //10
            ['nombre' => 'DERMATITIS'], //11
            ['nombre' => 'HERPES'],     //12
            ['nombre' => 'SORIASIS'],	//13
            ['nombre' => 'HONGOS'],     //14
           // ['nombre' => 'OTRO'],		//15
            
        ]);
    }
}
