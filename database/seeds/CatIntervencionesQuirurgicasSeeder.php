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
            ['nombre' => 'APÉNDICE'], 	//1
            ['nombre' => 'CESÁREA'],			//2
            ['nombre' => 'CIRCUNCISIÓN'],			//3
            ['nombre' => 'CORAZÓN'],				//4
            ['nombre' => 'HERNIA'],	//5
            ['nombre' => 'HISTERECTOMÍA'],				//6
            ['nombre' => 'POR FRACTURA'],				//7
            ['nombre' => 'VESÍCULA'],				//8
            ['nombre' => 'DIU'],				//9
            ['nombre' => 'LIGADURA'],			//10
            ['nombre' => 'VASECTOMÍA'],				//11
            ['nombre' => 'OTRO'],				//12
            
        ]);
    }
}
