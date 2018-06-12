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
    ['nombre' => 'CABELLO Y VELLO FACIAL', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],            //1

    ['nombre' => 'CABELLO', 'partePadre' => '1', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '1', 'tamano' => '1', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                           //2

    ['nombre' => 'BARBA', 'partePadre' => '1', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '1', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '1', 'observaciones' => '1',))],                            //3

    ['nombre' => 'BIGOTE', 'partePadre' => '1', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '1', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '1', 'observaciones' => '1',))],                           //4

    ['nombre' => 'PATILLA', 'partePadre' => '1', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '1', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '1', 'observaciones' => '1',))],                         //5

    ['nombre' => 'CABEZA', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],                            //6

    ['nombre' => 'FRENTE', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //7

    ['nombre' => 'CEJA', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '1', 'tipo' => '1', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                             //8

    ['nombre' => 'OJO', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '1', 'tipo' => '0', 'color' => '1', 'tamano' => '1', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                              //9

    ['nombre' => 'NARIZ', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                          //10

    ['nombre' => 'OREJA', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '1', 'tipo' => '1', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                           //11

    ['nombre' => 'MEJILLA', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '1', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                          //12

    ['nombre' => 'BOCA', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '0', 'tamano' => '1', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //13

    ['nombre' => 'LABIOS', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '1', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //14

    ['nombre' => 'MENTÓN', 'partePadre' => '6', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //15

    ['nombre' => 'CUELLO', 'partePadre' => '16', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //16

    ['nombre' => 'HOMBRO DERECHO', 'partePadre' => '17', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //17


    ['nombre' => 'HOMBRO IZQUIERDO', 'partePadre' => '18', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //18


    ['nombre' => 'PECHO', 'partePadre' => '19', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '1', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                                        //19


    ['nombre' => 'BRAZO', 'partePadre' => '68', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //20


    ['nombre' => 'ANTEBRAZO', 'partePadre' => '68', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                      //21


    ['nombre' => 'CODO', 'partePadre' => '68', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //22


    ['nombre' => 'MANO IZQUIERDA', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //23


    ['nombre' => 'PALMA', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //24


    ['nombre' => 'DEDO PULGAR', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                      //25


    ['nombre' => 'DEDO MEÑIQUE', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                     //26


    ['nombre' => 'DEDO ANULAR', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                      //27


    ['nombre' => 'DEDO MEDIO', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                       //28


    ['nombre' => 'DEDO ÍNDICE', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                      //29


    ['nombre' => 'BRAZO', 'partePadre' => '69', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //30


    ['nombre' => 'ANTEBRAZO', 'partePadre' => '69', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //31


    ['nombre' => 'CODO', 'partePadre' => '69', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //32


    ['nombre' => 'MANO DERECHA', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],                            //33


    ['nombre' => 'PALMA', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                          //34


    ['nombre' => 'DEDO MEÑIQUE', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                           //35


    ['nombre' => 'DEDO ANULAR', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //36


    ['nombre' => 'DEDO MEDIO', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //37


    ['nombre' => 'DEDO ÍNDICE', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //38


    ['nombre' => 'DEDO PULGAR', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //39


    ['nombre' => 'ABDOMEN', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //40


    ['nombre' => 'CADERA', 'partePadre' => '40', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //41


    ['nombre' => 'MUÑECA', 'partePadre' => '33', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //42


    ['nombre' => 'MUÑECA', 'partePadre' => '23', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //43


    ['nombre' => 'PIERNA IZQUIERDA', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],                            //44


    ['nombre' => 'MUSLO IZQUIERDO', 'partePadre' => '45', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //45


    ['nombre' => 'RODILLA', 'partePadre' => '44', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //46


    ['nombre' => 'ESPINILLA', 'partePadre' => '44', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //47


    ['nombre' => 'PANTORRILLA IZQUIERDA', 'partePadre' => '48', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //48


    ['nombre' => 'PIE IZQUIERDO', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],                            //49


    ['nombre' => 'TOBILLO', 'partePadre' => '49', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //50


    ['nombre' => 'TALÓN', 'partePadre' => '49', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //51


    ['nombre' => 'OMBLIGO', 'partePadre' => '40', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //52


    ['nombre' => 'PIERNA DERECHA', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],                            //53


    ['nombre' => 'MUSLO DERECHO', 'partePadre' => '54', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //54


    ['nombre' => 'RODILLA', 'partePadre' => '53', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //55


    ['nombre' => 'ESPINILLA', 'partePadre' => '53', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //56


    ['nombre' => 'PANTORRILLA DERECHA', 'partePadre' => '57', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //57


    ['nombre' => 'PIE DERECHO', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],                            //58


    ['nombre' => 'TALÓN', 'partePadre' => '58', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //59


    ['nombre' => 'TOBILLO', 'partePadre' => '58', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //60


    ['nombre' => 'NUCA', 'partePadre' => '61', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //61


    ['nombre' => 'ESPALDA', 'partePadre' => '62', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //62


    ['nombre' => 'DORSO', 'partePadre' => '63', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //63


    ['nombre' => 'UÑA', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //64


    ['nombre' => 'NALGA', 'partePadre' => '65', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '1', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],                            //65


    ['nombre' => 'FEMORAL IZQUIERDO', 'partePadre' => '66', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],               //66


    ['nombre' => 'FEMORAL DERECHO', 'partePadre' => '67', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '1', 'modificaciones' => '1', 'observaciones' => '1',))],               //67


    ['nombre' => 'BRAZO IZQUIERDO', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '1', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],               //68     BRAZO IZQUIERDO
    ['nombre' => 'BRAZO DERECHO', 'partePadre' => '0', 'reglas' => json_encode(array('parte' => '0', 'posicion' => '0', 'tipo' => '0', 'color' => '0', 'tamano' => '0', 'particularidades' => '0', 'modificaciones' => '0', 'observaciones' => '0',))],               //69     BRAZO DERECHO


        ]);
    }
}


