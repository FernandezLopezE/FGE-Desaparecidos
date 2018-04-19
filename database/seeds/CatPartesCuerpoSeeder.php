<?php

use Illuminate\Database\Seeder;

class CatPartesCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('cat_partes_cuerpo')->insert([
            ['nombre' => 'SIN INFORMACIÓN'], 	//1
            ['nombre' => 'ABDOMEN'],			//2
            ['nombre' => 'ANTEBRAZO'],			//3
            ['nombre' => 'BRAZO'],				//4
            ['nombre' => 'CADERA/ESPINILLA'],	//5
            ['nombre' => 'CEJA'],				//6
            ['nombre' => 'CODO'],				//7
            ['nombre' => 'CUELLO'],				//8
            ['nombre' => 'DEDO'],				//9
            ['nombre' => 'ESPALDA'],			//10
            ['nombre' => 'FRENTE'],				//11
            ['nombre' => 'HOMBRO'],				//12
            ['nombre' => 'LABIO'],				//13
            ['nombre' => 'MANO'],				//14
            ['nombre' => 'MEJILLA'],			//15
            ['nombre' => 'MENTÓN'],				//16
            ['nombre' => 'MUÑECA'],				//17
            ['nombre' => 'MUSLO'],				//18
            ['nombre' => 'NALGA'],				//19
            ['nombre' => 'NARIZ'],				//20
            ['nombre' => 'NUCA'],				//21
            ['nombre' => 'OMBLIGO'],			//22
            ['nombre' => 'OREJA'],				//23
            ['nombre' => 'OJO'],				//24
            ['nombre' => 'PALMA'],				//25
            ['nombre' => 'PANTORRILLA'],		//26
            ['nombre' => 'PECHO'],				//27
            ['nombre' => 'PIE'],				//28
            ['nombre' => 'PIERNA'],				//29
            ['nombre' => 'RODILLA'],			//30
            ['nombre' => 'TALÓN'],				//31
            ['nombre' => 'TOBILLO'],			//32
            ['nombre' => 'DORSO'],				//33
            ['nombre' => 'CABELLO'],			//34
            ['nombre' => 'BARBA'],				//35
            ['nombre' => 'BIGOTE'],				//36
            ['nombre' => 'PATILLA'],			//37
            ['nombre' => 'OTRO']				//38
        ]);
    }
}


