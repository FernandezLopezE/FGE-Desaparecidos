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
    ]);
    }
}
