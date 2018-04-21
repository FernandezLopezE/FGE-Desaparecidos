<?php

use Illuminate\Database\Seeder;

class CatModificacionesCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_modificaciones_cuerpo')->insert([
         	['idPartesCuerpo'=>34, 'nombre' => 'MODIFICACIONES CABELLO'], //1
         	['idPartesCuerpo'=>11, 'nombre' => 'MODIFICACIONES FRENTE'],  //2
         	['idPartesCuerpo'=>6, 'nombre' => 'MODIFICACIONES CEJA'],		//3
         	['idPartesCuerpo'=>24, 'nombre' => 'MODIFICACIONES OJO'],		//4
         	['idPartesCuerpo'=>23, 'nombre' => 'MODIFICACIONES OREJA'],	//5
         	['idPartesCuerpo'=>37, 'nombre' => 'MODIFICACIONES PATILLA'], //6
         	['idPartesCuerpo'=>15, 'nombre' => 'MODIFICACIONES MEJILLA'], //7       	
         	['idPartesCuerpo'=>20, 'nombre' => 'MODIFICACIONES NARIZ'],	//8
         	['idPartesCuerpo'=>36, 'nombre' => 'MODIFICACIONES BIGOTE'],	//9
         	['idPartesCuerpo'=>13, 'nombre' => 'MODIFICACIONES LABIO'],	//10
         	['idPartesCuerpo'=>16, 'nombre' => 'MODIFICACIONES MENTÓN'],	//11		
			['idPartesCuerpo'=>35, 'nombre' => 'MODIFICACIONES BARBA'],   //12 

           //
            ['idPartesCuerpo'=>8, 'nombre' => 'MODIFICACIONES CUELLO'], //13
            ['idPartesCuerpo'=>21, 'nombre' => 'MODIFICACIONES NUCA'],  //14
            ['idPartesCuerpo'=>12, 'nombre' => 'MODIFICACIONES HOMBRO'],     //15
            ['idPartesCuerpo'=>4, 'nombre' => 'MODIFICACIONES BRAZO'],     //16
            ['idPartesCuerpo'=>3, 'nombre' => 'MODIFICACIONES ANTEBRAZO'],   //17
            ['idPartesCuerpo'=>7, 'nombre' => 'MODIFICACIONES CODO'], //18
            ['idPartesCuerpo'=>17, 'nombre' => 'MODIFICACIONES MUÑECA'], //19        
            ['idPartesCuerpo'=>25, 'nombre' => 'MODIFICACIONES PALMA'],   //20
            ['idPartesCuerpo'=>14, 'nombre' => 'MODIFICACIONES MANO'],  //21
            ['idPartesCuerpo'=>9, 'nombre' => 'MODIFICACIONES DEDO'],   //22
            ['idPartesCuerpo'=>10, 'nombre' => 'MODIFICACIONES ESPALDA'],  //23        
            ['idPartesCuerpo'=>2, 'nombre' => 'MODIFICACIONES ADBOMEN'],   //24
            ['idPartesCuerpo'=>5, 'nombre' => 'MODIFICACIONES CADERA/ESPINILLA'], //25
            ['idPartesCuerpo'=>19, 'nombre' => 'MODIFICACIONES NALGA'],  //26
            ['idPartesCuerpo'=>33, 'nombre' => 'MODIFICACIONES DORSO'],     //27
            ['idPartesCuerpo'=>18, 'nombre' => 'MODIFICACIONES MUSLO'],     //28
            ['idPartesCuerpo'=>22, 'nombre' => 'MODIFICACIONES OMBLIGO'],   //29
            ['idPartesCuerpo'=>29, 'nombre' => 'MODIFICACIONES PIERNA'], //30
            ['idPartesCuerpo'=>30, 'nombre' => 'MODIFICACIONES RODILLA'], //31        
            ['idPartesCuerpo'=>31, 'nombre' => 'MODIFICACIONES TALÓN'],   //32
            ['idPartesCuerpo'=>28, 'nombre' => 'MODIFICACIONES PIE'],  //33
            ['idPartesCuerpo'=>27, 'nombre' => 'MODIFICACIONES PECHO'],   //34
            ['idPartesCuerpo'=>26, 'nombre' => 'MODIFICACIONES PANTORRILLA'],  //35        
            ['idPartesCuerpo'=>32, 'nombre' => 'MODIFICACIONES TOBILLO'],   //36
            ['idPartesCuerpo'=>1, 'nombre' => 'SIN INFORMACION'],   //37   
    ]);
    }
}
