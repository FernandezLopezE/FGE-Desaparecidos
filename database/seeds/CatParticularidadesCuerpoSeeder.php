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
    ]);
  }
}
