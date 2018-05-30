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
                ['nombre' => 'CABELLO Y VELLO FACIAL', 'partePadre' => '0'],            //1
                ['nombre' => 'CABELLO', 'partePadre' => '1'],                           //2
                ['nombre' => 'BARBA', 'partePadre' => '1'],                            //3
                ['nombre' => 'BIGOTE', 'partePadre' => '1'],                           //4
                ['nombre' => 'PATILLA', 'partePadre' => '1'],                         //5
                ['nombre' => 'CABEZA', 'partePadre' => '0'],                            //6
                ['nombre' => 'FRENTE', 'partePadre' => '6'],                            //7
                ['nombre' => 'CEJA', 'partePadre' => '6'],                             //8
                ['nombre' => 'OJO', 'partePadre' => '6'],                              //9
                ['nombre' => 'NARIZ', 'partePadre' => '6'],                          //10
                ['nombre' => 'OREJA', 'partePadre' => '6'],                           //11
                ['nombre' => 'MEJILLA', 'partePadre' => '6'],                          //12
                ['nombre' => 'BOCA', 'partePadre' => '6'],                            //13
                ['nombre' => 'LABIOS', 'partePadre' => '6'],                            //14
                ['nombre' => 'MENTÓN', 'partePadre' => '6'],                            //15
                ['nombre' => 'CUELLO', 'partePadre' => '0'],                            //16
                ['nombre' => 'HOMBRO DERECHO', 'partePadre' => '0'],                            //17
                ['nombre' => 'HOMBRO IZQUIERDO', 'partePadre' => '0'],                            //18
                ['nombre' => 'PECHO', 'partePadre' => '0'],                                        //19
                ['nombre' => 'BRAZO IZQUIERDO', 'partePadre' => '68'],                            //20
                ['nombre' => 'ANTEBRAZO IZQUIERDO', 'partePadre' => '68'],                      //21
                ['nombre' => 'CODO IZQUIERDO', 'partePadre' => '68'],                            //22
                ['nombre' => 'MANO IZQUIERDA', 'partePadre' => '0'],                            //23
                ['nombre' => 'PALMA IZQUIERDA', 'partePadre' => '23'],                            //24
                ['nombre' => 'DEDO PULGAR IZQUIERDO', 'partePadre' => '23'],                      //25
                ['nombre' => 'DEDO MEÑIQUE IZQUIERDO', 'partePadre' => '23'],                     //26
                ['nombre' => 'DEDO ANULAR IZQUIERDO', 'partePadre' => '23'],                      //27
                ['nombre' => 'DEDO MEDIO IZQUIERDO', 'partePadre' => '23'],                       //28
                ['nombre' => 'DEDO ÍNDICE IZQUIERDO', 'partePadre' => '23'],                      //29
                ['nombre' => 'BRAZO DERECHO', 'partePadre' => '69'],                            //30
                ['nombre' => 'ANTEBRAZO DERECHO', 'partePadre' => '69'],                            //31
                ['nombre' => 'CODO DERECHO', 'partePadre' => '69'],                            //32
                ['nombre' => 'MANO DERECHA', 'partePadre' => '0'],                            //33
                ['nombre' => 'PALMA DERECHA', 'partePadre' => '33'],                          //34
                ['nombre' => 'DEDO MEÑIQUE DERECHO', 'partePadre' => '33'],                           //35
                ['nombre' => 'DEDO ANULAR DERECHO', 'partePadre' => '33'],                            //36
                ['nombre' => 'DEDO MEDIO DERECHO', 'partePadre' => '33'],                            //37
                ['nombre' => 'DEDO ÍNDICE DERECHO', 'partePadre' => '33'],                            //38
                ['nombre' => 'DEDO PULGAR DERECHO', 'partePadre' => '33'],                            //39
                ['nombre' => 'ABDOMEN', 'partePadre' => '0'],                            //40
                ['nombre' => 'CADERA', 'partePadre' => '40'],                            //41
                ['nombre' => 'MUÑECA DERECHA', 'partePadre' => '33'],                            //42
                ['nombre' => 'MUÑECA IZQUIERDA', 'partePadre' => '23'],                            //43
                ['nombre' => 'PIERNA IZQUIERDA', 'partePadre' => '0'],                            //44
                ['nombre' => 'MUSLO IZQUIERDO', 'partePadre' => '0'],                            //45
                ['nombre' => 'RODILLA IZQUIERDA', 'partePadre' => '44'],                            //46
                ['nombre' => 'ESPINILLA IZQUIERDA', 'partePadre' => '44'],                            //47
                ['nombre' => 'PANTORRILLA IZQUIERDA', 'partePadre' => '0'],                            //48
                ['nombre' => 'PIE IZQUIERDO', 'partePadre' => '0'],                            //49
                ['nombre' => 'TOBILLO IZQUIERDO', 'partePadre' => '49'],                            //50
                ['nombre' => 'TALÓN IZQUIERDO', 'partePadre' => '49'],                            //51
                ['nombre' => 'OMBLIGO', 'partePadre' => '40'],                            //52
                ['nombre' => 'PIERNA DERECHA', 'partePadre' => '0'],                            //53
                ['nombre' => 'MUSLO DERECHO', 'partePadre' => '0'],                            //54
                ['nombre' => 'RODILLA DERECHA', 'partePadre' => '53'],                            //55
                ['nombre' => 'ESPINILLA DERECHA', 'partePadre' => '53'],                            //56
                ['nombre' => 'PANTORRILLA DERECHA', 'partePadre' => '0'],                            //57
                ['nombre' => 'PIE DERECHO', 'partePadre' => '0'],                            //58
                ['nombre' => 'TALÓN DERECHO', 'partePadre' => '58'],                            //59
                ['nombre' => 'TOBILLO DERECHO', 'partePadre' => '58'],                            //60
                ['nombre' => 'NUCA', 'partePadre' => '0'],                            //61
                ['nombre' => 'ESPALDA', 'partePadre' => '0'],                            //62
                ['nombre' => 'DORSO', 'partePadre' => '0'],                            //63
                ['nombre' => 'UÑA', 'partePadre' => '0'],                            //64
                ['nombre' => 'NALGA', 'partePadre' => '0'],                            //65
                ['nombre' => 'FEMORAL IZQUIERDO', 'partePadre' => '0'],               //66
                ['nombre' => 'FEMORAL DERECHO', 'partePadre' => '0'],               //67
                ['nombre' => 'BRAZO 1', 'partePadre' => '0'],               //68 BRAZO IZQUIERDO
                ['nombre' => 'BRAZO 2', 'partePadre' => '0'],               //69 BRAZO DERECHO
            
            
        ]);
    }
}


