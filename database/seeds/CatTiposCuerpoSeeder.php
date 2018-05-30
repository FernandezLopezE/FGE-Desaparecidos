<?php

use Illuminate\Database\Seeder;

class CatTiposCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_tipos_cuerpo')->insert([
        	//CABELLO
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'LACIO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'SEMIONDULADO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'ONDULADO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'CHINO/RIZADO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'CRESPO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '2'],


            //CEJA IZQUIERDA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'REGULAR', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'SIN CEJA', 'idPartesCuerpo' => '8'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '8'],

            

            //NARIZ
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '10'],
            [ 'nombre' => 'CHATA/BOTÓN', 'idPartesCuerpo' => '10'],
            [ 'nombre' => 'AGUILEÑA', 'idPartesCuerpo' => '10'],
            [ 'nombre' => 'RESPINGADA/RECATA', 'idPartesCuerpo' => '10'],
            [ 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)', 'idPartesCuerpo' => '10'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '10'],

            //OREJA IZQUIERDA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '11'],
            [ 'nombre' => 'COMPLETA', 'idPartesCuerpo' => '11'],
            [ 'nombre' => 'INCOMPLETA', 'idPartesCuerpo' => '11'],
            [ 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)', 'idPartesCuerpo' => '11'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '11'],


            //BARBA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '3'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '3'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '3'],
            [ 'nombre' => 'LAMPIÑO', 'idPartesCuerpo' => '3'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '3'],


            //BIGOTE
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '4'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '4'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '4'],
            [ 'nombre' => 'LAMPIÑO', 'idPartesCuerpo' => '4'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '4'],


            //PATILLAS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '5'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '5'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '5'],
            [ 'nombre' => 'LAMPIÑO', 'idPartesCuerpo' => '5'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '5'],

            //MENTÓN
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '15'],
            [ 'nombre' => 'SALIENTE', 'idPartesCuerpo' => '15'],
            [ 'nombre' => 'RECTO', 'idPartesCuerpo' => '15'],
            [ 'nombre' => 'RETRAÍDO', 'idPartesCuerpo' => '15'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '15'],



            //LABIOS INFERIOR
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '14'],
            [ 'nombre' => 'DELGADO', 'idPartesCuerpo' => '14'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '14'],
            [ 'nombre' => 'GRUESO', 'idPartesCuerpo' => '14'],
            [ 'nombre' => 'MIXTO', 'idPartesCuerpo' => '14'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '14'],

            



           
			            
        ]);
    }
}
