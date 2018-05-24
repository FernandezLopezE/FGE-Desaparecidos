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
         	['idPartesCuerpo'=>55, 'nombre' => 'PARTICULARIDADES CABELLO'], //1
         	['idPartesCuerpo'=>16, 'nombre' => 'PARTICULARIDADES FRENTE'],  //2
         	['idPartesCuerpo'=>6, 'nombre' => 'PARTICULARIDADES CEJA IZQUIERDA'],//3
            ['idPartesCuerpo'=>7, 'nombre' => 'PARTICULARIDADES CEJA DERECHA'],//4
         	['idPartesCuerpo'=>37, 'nombre' => 'PARTICULARIDADES OJO IZQUIERDO'],	//5
            ['idPartesCuerpo'=>36, 'nombre' => 'PARTICULARIDADES OJO DERECHO'], //6
         	['idPartesCuerpo'=>35, 'nombre' => 'PARTICULARIDADES OREJA IZQUIERDA'],	//7
            ['idPartesCuerpo'=>34, 'nombre' => 'PARTICULARIDADES OREJA DERECHA'],//8
         	['idPartesCuerpo'=>58, 'nombre' => 'PARTICULARIDADES PATILLAS'], //9
         	['idPartesCuerpo'=>23, 'nombre' => 'PARTICULARIDADES AMBAS MEJILLAS'], //10       	
         	['idPartesCuerpo'=>31, 'nombre' => 'PARTICULARIDADES NARIZ'],	//11
         	['idPartesCuerpo'=>57, 'nombre' => 'PARTICULARIDADES BIGOTE'],	//12
         	['idPartesCuerpo'=>19, 'nombre' => 'PARTICULARIDADES LABIO INFERIOR'],	//13
            ['idPartesCuerpo'=>20, 'nombre' => 'PARTICULARIDADES LABIO SUPERIOR'],//14
         	['idPartesCuerpo'=>24, 'nombre' => 'PARTICULARIDADES MENTÓN'],	//15	
			['idPartesCuerpo'=>56, 'nombre' => 'PARTICULARIDADES BARBA'],   //16    

            //
            ['idPartesCuerpo'=>10, 'nombre' => 'PARTICULARIDADES CUELLO'], //17
            ['idPartesCuerpo'=>32, 'nombre' => 'PARTICULARIDADES NUCA'],  //18
            ['idPartesCuerpo'=>18, 'nombre' => 'PARTICULARIDADES HOMBRO IZQUIERDO'],     //19
            ['idPartesCuerpo'=>17, 'nombre' => 'PARTICULARIDADES HOMBRO DERECHO'],//20
            ['idPartesCuerpo'=>4, 'nombre' => 'PARTICULARIDADES BRAZO IZQUIERDO'],     //21
            ['idPartesCuerpo'=>61, 'nombre' => 'PARTICULARIDADES BRAZO DERECHO'],//22
            ['idPartesCuerpo'=>3, 'nombre' => 'PARTICULARIDADES ANTEBRAZO IZQUIERDO'],   //23
            ['idPartesCuerpo'=>62, 'nombre' => 'PARTICULARIDADES ANTEBRAZO DERECHO'],//24
            ['idPartesCuerpo'=>8, 'nombre' => 'PARTICULARIDADES CODO IZQUIERDO'], //25
            ['idPartesCuerpo'=>9, 'nombre' => 'PARTICULARIDADES CODO DERECHO'],//26
            ['idPartesCuerpo'=>26, 'nombre' => 'PARTICULARIDADES MUÑECA IZQUIERDA'], //27        
            ['idPartesCuerpo'=>25, 'nombre' => 'PARTICULARIDADES MUÑECA DERECHA'],//28
            ['idPartesCuerpo'=>39, 'nombre' => 'PARTICULARIDADES PALMA IZQUIERDA'],   //29
            ['idPartesCuerpo'=>38, 'nombre' => 'PARTICULARIDADES PALMA DERECHA'],//30

            ['idPartesCuerpo'=>21, 'nombre' => 'PARTICULARIDADES MANO IZQUIERDA'],  //31
            ['idPartesCuerpo'=>22, 'nombre' => 'PARTICULARIDADES MANO DERECHA'],//32
            ['idPartesCuerpo'=>12, 'nombre' => 'PARTICULARIDADES DEDO ANULAR IZQUIERDO'],   //33
            ['idPartesCuerpo'=>64, 'nombre' => 'PARTICULARIDADES DEDO ANULAR DERECHO'], //34
            ['idPartesCuerpo'=>14, 'nombre' => 'PARTICULARIDADES DEDO ÍNDICE IZQUIERDO'],   //35
            ['idPartesCuerpo'=>66, 'nombre' => 'PARTICULARIDADES DEDO ÍNDICE DERECHO'],//36
            ['idPartesCuerpo'=>13, 'nombre' => 'PARTICULARIDADES DEDO MEDIO IZQUIERDO'],   //37
            ['idPartesCuerpo'=>65, 'nombre' => 'PARTICULARIDADES DEDO MEDIO DERECHO'],//38
            ['idPartesCuerpo'=>11, 'nombre' => 'PARTICULARIDADES DEDO MENIQUE IZQUIERDO'],   //39
            ['idPartesCuerpo'=>63, 'nombre' => 'PARTICULARIDADES DEDO MENIQUE DERECHO'],//40
            ['idPartesCuerpo'=>70, 'nombre' => 'PARTICULARIDADES DEDO PULGAR IZQUIERDO'],   //41
            ['idPartesCuerpo'=>69, 'nombre' => 'PARTICULARIDADES DEDO PULGAR DERECHO'],//42


            ['idPartesCuerpo'=>15, 'nombre' => 'PARTICULARIDADES ESPALDA'],  //43        
            ['idPartesCuerpo'=>2, 'nombre' => 'PARTICULARIDADES ADBOMEN'],   //44
            ['idPartesCuerpo'=>5, 'nombre' => 'PARTICULARIDADES CADERA'], //45
            ['idPartesCuerpo'=>30, 'nombre' => 'PARTICULARIDADES NALGA IZQUIERDA'],  //46
            ['idPartesCuerpo'=>29, 'nombre' => 'PARTICULARIDADES NALGA DERECHA'],//47
            ['idPartesCuerpo'=>54, 'nombre' => 'PARTICULARIDADES DORSO'],     //48
            ['idPartesCuerpo'=>27, 'nombre' => 'PARTICULARIDADES MUSLO IZQUIERDO'],     //49
            ['idPartesCuerpo'=>28, 'nombre' => 'PARTICULARIDADES MUSLO DERECHO'],//50
            ['idPartesCuerpo'=>33, 'nombre' => 'PARTICULARIDADES OMBLIGO'],   //51
            ['idPartesCuerpo'=>47, 'nombre' => 'PARTICULARIDADES PIERNA IZQUIERDA'], //52
            ['idPartesCuerpo'=>46, 'nombre' => 'PARTICULARIDADES PIERNA DERECHA'],//53
            ['idPartesCuerpo'=>49, 'nombre' => 'PARTICULARIDADES RODILLA IZQUIERDA'], //54        
            ['idPartesCuerpo'=>48, 'nombre' => 'PARTICULARIDADES RODILLA DERECHA'],//55
            ['idPartesCuerpo'=>51, 'nombre' => 'PARTICULARIDADES TALÓN IZQUIERDO'], //56
            ['idPartesCuerpo'=>50, 'nombre' => 'PARTICULARIDADES TALÓN DERECHO'],   //57
            ['idPartesCuerpo'=>45, 'nombre' => 'PARTICULARIDADES PIE IZQUIERDO'],  //58
            ['idPartesCuerpo'=>44, 'nombre' => 'PARTICULARIDADES PIE DERECHO'],//59
            ['idPartesCuerpo'=>42, 'nombre' => 'PARTICULARIDADES PECHO DERECHO'],   //60
            ['idPartesCuerpo'=>43, 'nombre' => 'PARTICULARIDADES PECHO IZQUIERDO'],//61
            ['idPartesCuerpo'=>41, 'nombre' => 'PARTICULARIDADES PANTORRILLA IZQUIERDA'],  //62
            ['idPartesCuerpo'=>40, 'nombre' => 'PARTICULARIDADES PANTORRILLA DERECHA'],//63    
            ['idPartesCuerpo'=>53, 'nombre' => 'PARTICULARIDADES TOBILLO IZQUIERDO'],   //64
            ['idPartesCuerpo'=>52, 'nombre' => 'PARTICULARIDADES TOBILLO DERECHO'],//65
            ['idPartesCuerpo'=>59, 'nombre' => 'PARTICULARIDADES UÑA'],//66
            ['idPartesCuerpo'=>60, 'nombre' => 'PARTICULARIDADES CABEZA'],//67

            ['idPartesCuerpo'=>73, 'nombre' => 'PARTICULARIDADES AMBAS CEJAS'],//68
            ['idPartesCuerpo'=>74, 'nombre' => 'PARTICULARIDADES AMBOS OJOS'],//69
            ['idPartesCuerpo'=>75, 'nombre' => 'PARTICULARIDADES MEJILLA IZQUIERDA'], //70 
            ['idPartesCuerpo'=>76, 'nombre' => 'PARTICULARIDADES MEJILLA DERECHA'], //71
            ['idPartesCuerpo'=>77, 'nombre' => 'PARTICULARIDADES AMBAS OREJAS'],//72
            ['idPartesCuerpo'=>72, 'nombre' => 'PARTICULARIDADES AMBOS LABIOS'],//73


    ]);
  }
}
