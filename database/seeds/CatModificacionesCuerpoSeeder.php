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
         	['idPartesCuerpo'=>55, 'nombre' => 'MODIFICACIONES CABELLO'], //1
            ['idPartesCuerpo'=>16, 'nombre' => 'MODIFICACIONES FRENTE'],  //2
            ['idPartesCuerpo'=>6, 'nombre' => 'MODIFICACIONES CEJA IZQUIERDA'],//3
            ['idPartesCuerpo'=>7, 'nombre' => 'MODIFICACIONES CEJA DERECHA'],//4
            ['idPartesCuerpo'=>37, 'nombre' => 'MODIFICACIONES OJO IZQUIERDO'],   //5
            ['idPartesCuerpo'=>36, 'nombre' => 'MODIFICACIONES OJO DERECHO'], //6
            ['idPartesCuerpo'=>35, 'nombre' => 'MODIFICACIONES OREJA IZQUIERDA'], //7
            ['idPartesCuerpo'=>34, 'nombre' => 'MODIFICACIONES OREJA DERECHA'],//8
            ['idPartesCuerpo'=>58, 'nombre' => 'MODIFICACIONES PATILLAS'], //9
            ['idPartesCuerpo'=>23, 'nombre' => 'MODIFICACIONES MEJILLAS'], //10           
            ['idPartesCuerpo'=>31, 'nombre' => 'MODIFICACIONES NARIZ'],   //11
            ['idPartesCuerpo'=>57, 'nombre' => 'MODIFICACIONES BIGOTE'],  //12
            ['idPartesCuerpo'=>19, 'nombre' => 'MODIFICACIONES LABIO INFERIOR'],  //13
            ['idPartesCuerpo'=>20, 'nombre' => 'MODIFICACIONES LABIO SUPERIOR'],//14
            ['idPartesCuerpo'=>24, 'nombre' => 'MODIFICACIONES MENTÓN'],  //15    
            ['idPartesCuerpo'=>56, 'nombre' => 'MODIFICACIONES BARBA'],   //16    

            //
            ['idPartesCuerpo'=>10, 'nombre' => 'MODIFICACIONES CUELLO'], //17
            ['idPartesCuerpo'=>32, 'nombre' => 'MODIFICACIONES NUCA'],  //18
            ['idPartesCuerpo'=>18, 'nombre' => 'MODIFICACIONES HOMBRO IZQUIERDO'],     //19
            ['idPartesCuerpo'=>17, 'nombre' => 'MODIFICACIONES HOMBRO DERECHO'],//20
            ['idPartesCuerpo'=>4, 'nombre' => 'MODIFICACIONES BRAZO IZQUIERDO'],     //21
            ['idPartesCuerpo'=>61, 'nombre' => 'MODIFICACIONES BRAZO DERECHO'],//22
            ['idPartesCuerpo'=>3, 'nombre' => 'MODIFICACIONES ANTEBRAZO IZQUIERDO'],   //23
            ['idPartesCuerpo'=>62, 'nombre' => 'MODIFICACIONES ANTEBRAZO DERECHO'],//24
            ['idPartesCuerpo'=>8, 'nombre' => 'MODIFICACIONES CODO IZQUIERDO'], //25
            ['idPartesCuerpo'=>9, 'nombre' => 'MODIFICACIONES CODO DERECHO'],//26
            ['idPartesCuerpo'=>26, 'nombre' => 'MODIFICACIONES MUÑECA IZQUIERDA'], //27        
            ['idPartesCuerpo'=>25, 'nombre' => 'MODIFICACIONES MUÑECA DERECHA'],//28
            ['idPartesCuerpo'=>39, 'nombre' => 'MODIFICACIONES PALMA IZQUIERDA'],   //29
            ['idPartesCuerpo'=>38, 'nombre' => 'MODIFICACIONES PALMA DERECHA'],//30

            ['idPartesCuerpo'=>21, 'nombre' => 'MODIFICACIONES MANO IZQUIERDA'],  //31
            ['idPartesCuerpo'=>22, 'nombre' => 'MODIFICACIONES MANO DERECHA'],//32
            ['idPartesCuerpo'=>12, 'nombre' => 'MODIFICACIONES DEDO ANULAR IZQUIERDO'],   //33
            ['idPartesCuerpo'=>64, 'nombre' => 'MODIFICACIONES DEDO ANULAR DERECHO'], //34
            ['idPartesCuerpo'=>14, 'nombre' => 'MODIFICACIONES DEDO ÍNDICE IZQUIERDO'],   //35
            ['idPartesCuerpo'=>66, 'nombre' => 'MODIFICACIONES DEDO ÍNDICE DERECHO'],//36
            ['idPartesCuerpo'=>13, 'nombre' => 'MODIFICACIONES DEDO MEDIO IZQUIERDO'],   //37
            ['idPartesCuerpo'=>65, 'nombre' => 'MODIFICACIONES DEDO MEDIO DERECHO'],//38
            ['idPartesCuerpo'=>11, 'nombre' => 'MODIFICACIONES DEDO MENIQUE IZQUIERDO'],   //39
            ['idPartesCuerpo'=>63, 'nombre' => 'MODIFICACIONES DEDO MENIQUE DERECHO'],//40
            ['idPartesCuerpo'=>70, 'nombre' => 'MODIFICACIONES DEDO PULGAR IZQUIERDO'],   //41
            ['idPartesCuerpo'=>69, 'nombre' => 'MODIFICACIONES DEDO PULGAR DERECHO'],//42


            ['idPartesCuerpo'=>15, 'nombre' => 'MODIFICACIONES ESPALDA'],  //43        
            ['idPartesCuerpo'=>2, 'nombre' => 'MODIFICACIONES ADBOMEN'],   //44
            ['idPartesCuerpo'=>5, 'nombre' => 'MODIFICACIONES CADERA'], //45
            ['idPartesCuerpo'=>30, 'nombre' => 'MODIFICACIONES NALGA IZQUIERDA'],  //46
            ['idPartesCuerpo'=>29, 'nombre' => 'MODIFICACIONES NALGA DERECHA'],//47
            ['idPartesCuerpo'=>54, 'nombre' => 'MODIFICACIONES DORSO'],     //48
            ['idPartesCuerpo'=>27, 'nombre' => 'MODIFICACIONES MUSLO IZQUIERDO'],     //49
            ['idPartesCuerpo'=>28, 'nombre' => 'MODIFICACIONES MUSLO DERECHO'],//50
            ['idPartesCuerpo'=>33, 'nombre' => 'MODIFICACIONES OMBLIGO'],   //51
            ['idPartesCuerpo'=>47, 'nombre' => 'MODIFICACIONES PIERNA IZQUIERDA'], //52
            ['idPartesCuerpo'=>46, 'nombre' => 'MODIFICACIONES PIERNA DERECHA'],//53
            ['idPartesCuerpo'=>49, 'nombre' => 'MODIFICACIONES RODILLA IZQUIERDA'], //54        
            ['idPartesCuerpo'=>48, 'nombre' => 'MODIFICACIONES RODILLA DERECHA'],//55
            ['idPartesCuerpo'=>51, 'nombre' => 'MODIFICACIONES TALÓN IZQUIERDO'], //56
            ['idPartesCuerpo'=>50, 'nombre' => 'MODIFICACIONES TALÓN DERECHO'],   //57
            ['idPartesCuerpo'=>45, 'nombre' => 'MODIFICACIONES PIE IZQUIERDO'],  //58
            ['idPartesCuerpo'=>44, 'nombre' => 'MODIFICACIONES PIE DERECHO'],//59
            ['idPartesCuerpo'=>42, 'nombre' => 'MODIFICACIONES PECHO DERECHO'],   //60
            ['idPartesCuerpo'=>43, 'nombre' => 'MODIFICACIONES PECHO IZQUIERDO'],//61
            ['idPartesCuerpo'=>41, 'nombre' => 'MODIFICACIONES PANTORRILLA IZQUIERDA'],  //62
            ['idPartesCuerpo'=>40, 'nombre' => 'MODIFICACIONES PANTORRILLA DERECHA'],//63    
            ['idPartesCuerpo'=>53, 'nombre' => 'MODIFICACIONES TOBILLO IZQUIERDO'],   //64
            ['idPartesCuerpo'=>52, 'nombre' => 'MODIFICACIONES TOBILLO DERECHO'],//65
            ['idPartesCuerpo'=>59, 'nombre' => 'MODIFICACIONES UÑA'],//66
            ['idPartesCuerpo'=>60, 'nombre' => 'MODIFICACIONES CABEZA'],//67  

            ['idPartesCuerpo'=>73, 'nombre' => 'MODIFICACIONES AMBAS CEJAS'],//68
            ['idPartesCuerpo'=>74, 'nombre' => 'MODIFICACIONES AMBOS OJOS'],//69
            ['idPartesCuerpo'=>75, 'nombre' => 'MODIFICACIONES MEJILLA IZQUIERDA'], //70 
            ['idPartesCuerpo'=>76, 'nombre' => 'MODIFICACIONES MEJILLA DERECHA'], //71
            ['idPartesCuerpo'=>77, 'nombre' => 'MODIFICACIONES AMBAS OREJAS'],//72
            ['idPartesCuerpo'=>72, 'nombre' => 'MODIFICACIONES AMBOS LABIOS'],//73
    ]);
    }
}
