<?php

use Illuminate\Database\Seeder;

class CatParticularidadesCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds. ]);
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_particularidades_cuerpo')->insert([
         	['idPartesCuerpo'=>34, 'nombre' => 'PARTICULARIDADES CABELLO'], //1
         	['idPartesCuerpo'=>11, 'nombre' => 'PARTICULARIDADES FRENTE'],  //2
         	['idPartesCuerpo'=>6, 'nombre' => 'PARTICULARIDADES CEJA'],		//3
         	['idPartesCuerpo'=>24, 'nombre' => 'PARTICULARIDADES OJO'],		//4
         	['idPartesCuerpo'=>23, 'nombre' => 'PARTICULARIDADES OREJA'],	//5
         	['idPartesCuerpo'=>37, 'nombre' => 'PARTICULARIDADES PATILLA'], //6
         	['idPartesCuerpo'=>15, 'nombre' => 'PARTICULARIDADES MEJILLA'], //7       	
         	['idPartesCuerpo'=>20, 'nombre' => 'PARTICULARIDADES NARIZ'],	//8
         	['idPartesCuerpo'=>36, 'nombre' => 'PARTICULARIDADES BIGOTE'],	//9
         	['idPartesCuerpo'=>13, 'nombre' => 'PARTICULARIDADES LABIO'],	//10
         	['idPartesCuerpo'=>16, 'nombre' => 'PARTICULARIDADES MENTÓN'],	//11		
			['idPartesCuerpo'=>35, 'nombre' => 'PARTICULARIDADES BARBA'],   //12    

            //
            ['idPartesCuerpo'=>8, 'nombre' => 'PARTICULARIDADES CUELLO'], //13
            ['idPartesCuerpo'=>21, 'nombre' => 'PARTICULARIDADES NUCA'],  //14
            ['idPartesCuerpo'=>12, 'nombre' => 'PARTICULARIDADES HOMBRO'],     //15
            ['idPartesCuerpo'=>4, 'nombre' => 'PARTICULARIDADES BRAZO'],     //16
            ['idPartesCuerpo'=>3, 'nombre' => 'PARTICULARIDADES ANTEBRAZO'],   //17
            ['idPartesCuerpo'=>7, 'nombre' => 'PARTICULARIDADES CODO'], //18
            ['idPartesCuerpo'=>17, 'nombre' => 'PARTICULARIDADES MUÑECA'], //19        
            ['idPartesCuerpo'=>25, 'nombre' => 'PARTICULARIDADES PALMA'],   //20
            ['idPartesCuerpo'=>14, 'nombre' => 'PARTICULARIDADES MANO'],  //21
            ['idPartesCuerpo'=>9, 'nombre' => 'PARTICULARIDADES DEDO'],   //22
            ['idPartesCuerpo'=>10, 'nombre' => 'PARTICULARIDADES ESPALDA'],  //23        
            ['idPartesCuerpo'=>2, 'nombre' => 'PARTICULARIDADES ADBOMEN'],   //24
            ['idPartesCuerpo'=>5, 'nombre' => 'PARTICULARIDADES CADERA/ESPINILLA'], //25
            ['idPartesCuerpo'=>19, 'nombre' => 'PARTICULARIDADES NALGA'],  //26
            ['idPartesCuerpo'=>33, 'nombre' => 'PARTICULARIDADES DORSO'],     //27
            ['idPartesCuerpo'=>18, 'nombre' => 'PARTICULARIDADES MUSLO'],     //28
            ['idPartesCuerpo'=>22, 'nombre' => 'PARTICULARIDADES OMBLIGO'],   //29
            ['idPartesCuerpo'=>29, 'nombre' => 'PARTICULARIDADES PIERNA'], //30
            ['idPartesCuerpo'=>30, 'nombre' => 'PARTICULARIDADES RODILLA'], //31        
            ['idPartesCuerpo'=>31, 'nombre' => 'PARTICULARIDADES TALÓN'],   //32
            ['idPartesCuerpo'=>28, 'nombre' => 'PARTICULARIDADES PIE'],  //33
            ['idPartesCuerpo'=>27, 'nombre' => 'PARTICULARIDADES PECHO'],   //34
            ['idPartesCuerpo'=>26, 'nombre' => 'PARTICULARIDADES PANTORRILLA'],  //35        
            ['idPartesCuerpo'=>32, 'nombre' => 'PARTICULARIDADES TOBILLO'],   //36
             ['idPartesCuerpo'=>1, 'nombre' => 'SIN INFORMACION'],   //37

    ]);
  }
}
