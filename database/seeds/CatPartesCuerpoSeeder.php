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
            ['nombre' => 'SIN INFORMACIÓN', 'partePadre' => '0'], 	//1
            ['nombre' => 'ABDOMEN', 'partePadre' => '0'],			//2
            ['nombre' => 'ANTEBRAZO IZQUIERDO', 'partePadre' => '4'],			//3
            ['nombre' => 'BRAZO IZQUIERDO', 'partePadre' => '0'],	//4
            ['nombre' => 'CADERA', 'partePadre' => '0'],	//5
            ['nombre' => 'CEJA IZQUIERDA', 'partePadre' => '60'],     //6
            ['nombre' => 'CEJA DERECHA', 'partePadre' => '60'],       //7
            ['nombre' => 'CODO IZQUIERDO', 'partePadre' => '4'],     //8
            ['nombre' => 'CODO DERECHO', 'partePadre' => '61'],		//9		//7
            ['nombre' => 'CUELLO', 'partePadre' => '0'],				//10
            ['nombre' => 'DEDO MENIQUE IZQUIERDO', 'partePadre' => '21'],       //11
            ['nombre' => 'DEDO ANULAR IZQUIERDO', 'partePadre' => '21'],        //12
            ['nombre' => 'DEDO MEDIO IZQUIERDO', 'partePadre' => '21'],         //13
            ['nombre' => 'DEDO ÍNDICE IZQUIERDO', 'partePadre' => '21'],		//14
            ['nombre' => 'ESPALDA', 'partePadre' => '0'],			//15
            ['nombre' => 'FRENTE', 'partePadre' => '60'],				//16
            ['nombre' => 'HOMBRO DERECHO', 'partePadre' => '0'],		//17
            ['nombre' => 'HOMBRO IZQUIERDO', 'partePadre' => '0'],   //18
            ['nombre' => 'LABIO INFERIOR', 'partePadre' => '72'],     //19
            ['nombre' => 'LABIO SUPERIOR', 'partePadre' => '72'],		//20
            ['nombre' => 'MANO IZQUIERDA', 'partePadre' => '0'],     //21
            ['nombre' => 'MANO DERECHA', 'partePadre' => '0'],		//22
            ['nombre' => 'MEJILLAS', 'partePadre' => '0'],			//23
            ['nombre' => 'MENTÓN', 'partePadre' => '60'],				//24
            ['nombre' => 'MUÑECA DERECHA', 'partePadre' => '22'],		//25
            ['nombre' => 'MUÑECA IZQUIERDA', 'partePadre' => '21'],   //26
            ['nombre' => 'MUSLO IZQUIERDO', 'partePadre' => '47'],	//27
            ['nombre' => 'MUSLO DERECHO', 'partePadre' => '46'],      //28
            ['nombre' => 'NALGA DERECHA', 'partePadre' => '0'],      //29
            ['nombre' => 'NALGA IZQUIERDA', 'partePadre' => '0'],	//30
            ['nombre' => 'NARIZ', 'partePadre' => '60'],				//31
            ['nombre' => 'NUCA', 'partePadre' => '0'],				//32
            ['nombre' => 'OMBLIGO', 'partePadre' => '0'],			//33
            ['nombre' => 'OREJA DERECHA', 'partePadre' => '60'],		//34
            ['nombre' => 'OREJA IZQUIERDA', 'partePadre' => '60'],    //35
            ['nombre' => 'OJO DERECHO', 'partePadre' => '60'],		//36
            ['nombre' => 'OJO IZQUIERDO', 'partePadre' => '60'],      //37
            ['nombre' => 'PALMA DERECHA', 'partePadre' => '22'],		//38
            ['nombre' => 'PALMA IZQUIERDA', 'partePadre' => '21'],    //39
            ['nombre' => 'PANTORRILLA DERECHA', 'partePadre' => '46'],//40
            ['nombre' => 'PANTORRILLA IZQUIERDA', 'partePadre' => '47'],	//41
            ['nombre' => 'PECHO DERECHO', 'partePadre' => '0'],			//42
            ['nombre' => 'PECHO IZQUIERDO', 'partePadre' => '0'],        //43
            ['nombre' => 'PIE DERECHO', 'partePadre' => '0'],			//44
            ['nombre' => 'PIE IZQUIERDO', 'partePadre' => '0'],          //45
            ['nombre' => 'PIERNA DERECHA', 'partePadre' => '0'],         //46
            ['nombre' => 'PIERNA IZQUIERDA', 'partePadre' => '0'],		//47
            ['nombre' => 'RODILLA DERECHA', 'partePadre' => '46'],		//48
            ['nombre' => 'RODILLA IZQUIERDA', 'partePadre' => '47'],      //49
            ['nombre' => 'TALÓN DERECHO', 'partePadre' => '44'],			//50
            ['nombre' => 'TALÓN IZQUIERDO', 'partePadre' => '45'],        //51
            ['nombre' => 'TOBILLO DERECHO', 'partePadre' => '44'],		//52
            ['nombre' => 'TOBILLO IZQUIERDO', 'partePadre' => '45'],      //53
            ['nombre' => 'DORSO', 'partePadre' => '0'],				//54
            ['nombre' => 'CABELLO', 'partePadre' => '0'],			//55
            ['nombre' => 'BARBA', 'partePadre' => '60'],				//56
            ['nombre' => 'BIGOTE', 'partePadre' => '60'],				//57
            ['nombre' => 'PATILLAS', 'partePadre' => '60'],			//58
            ['nombre' => 'UÑA', 'partePadre' => '0'],                //59
            ['nombre' => 'CABEZA', 'partePadre' => '0'],             //60
            ['nombre' => 'BRAZO DERECHO', 'partePadre' => '0'],      //61
            ['nombre' => 'ANTEBRAZO DERECHO', 'partePadre' => '61'],    //62
            ['nombre' => 'DEDO MENIQUE DERECHO', 'partePadre' => '22'],       //63
            ['nombre' => 'DEDO ANULAR DERECHO', 'partePadre' => '22'],        //64
            ['nombre' => 'DEDO MEDIO DERECHO', 'partePadre' => '22'],         //65
            ['nombre' => 'DEDO ÍNDICE DERECHO', 'partePadre' => '22'],//66
            ['nombre' => 'ESPINILLA DERECHA', 'partePadre' => '46'],//67
            ['nombre' => 'ESPINILLA IZQUIERDA', 'partePadre' => '47'],//68
            ['nombre' => 'DEDO PULGAR DERECHO', 'partePadre' => '22'],//69
            ['nombre' => 'DEDO PULGAR IZQUIERDO', 'partePadre' => '21'],//70
            ['nombre' => 'BOCA', 'partePadre' => '60'],//71
            ['nombre' => 'LABIOS', 'partePadre' => '71'],//72
            ['nombre' => 'AMBAS CEJAS', 'partePadre' => '60'],//73
            
            
        ]);
    }
}


