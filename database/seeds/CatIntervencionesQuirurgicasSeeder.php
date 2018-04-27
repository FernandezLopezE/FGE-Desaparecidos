<?php

use Illuminate\Database\Seeder;

class CatIntervencionesQuirurgicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_intervenciones_quirurgicas')->insert([
          //  ['nombre' => 'SIN INFORMACIÓN'],    //1
            ['nombre' => 'APÉNDICE'], 	         //2
            ['nombre' => 'CESÁREA'],			 //3
            ['nombre' => 'CIRCUNCISIÓN'],		//4
            ['nombre' => 'CORAZÓN'],			//5
            ['nombre' => 'HERNIA'],	            //6
            ['nombre' => 'HISTERECTOMÍA'],		//7
            ['nombre' => 'POR FRACTURA'],		//8
            ['nombre' => 'VESÍCULA'],			//9
            ['nombre' => 'DIU'],				//10
            ['nombre' => 'LIGADURA'],			//11
            ['nombre' => 'VASECTOMÍA'],		    //12
          //  ['nombre' => 'OTRO'],				//13
            
        ]);
    }
}
