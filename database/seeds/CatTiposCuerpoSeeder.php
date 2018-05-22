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
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'LACIO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'SEMIONDULADO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'ONDULADO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'CHINO/RIZADO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'CRESPO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '55'],


            //CEJA IZQUIERDA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'REGULAR', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'SIN CEJA', 'idPartesCuerpo' => '6'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '6'],

            //CEJA DERECHA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'REGULAR', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'SIN CEJA', 'idPartesCuerpo' => '7'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '7'],

            //AMBAS CEJAS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'REGULAR', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'SIN CEJA', 'idPartesCuerpo' => '73'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '73'],

            //NARIZ
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '31'],
            [ 'nombre' => 'CHATA/BOTÓN', 'idPartesCuerpo' => '31'],
            [ 'nombre' => 'AGUILEÑA', 'idPartesCuerpo' => '31'],
            [ 'nombre' => 'RESPINGADA/RECATA', 'idPartesCuerpo' => '31'],
            [ 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)', 'idPartesCuerpo' => '31'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '31'],

            //OREJA IZQUIERDA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '35'],
            [ 'nombre' => 'COMPLETA', 'idPartesCuerpo' => '35'],
            [ 'nombre' => 'INCOMPLETA', 'idPartesCuerpo' => '35'],
            [ 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)', 'idPartesCuerpo' => '35'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '35'],


            //OREJA DERECHA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '34'],
            [ 'nombre' => 'COMPLETA', 'idPartesCuerpo' => '34'],
            [ 'nombre' => 'INCOMPLETA', 'idPartesCuerpo' => '34'],
            [ 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)', 'idPartesCuerpo' => '34'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '34'],

            //AMBAS OREJAS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '77'],
            [ 'nombre' => 'COMPLETA', 'idPartesCuerpo' => '77'],
            [ 'nombre' => 'INCOMPLETA', 'idPartesCuerpo' => '77'],
            [ 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)', 'idPartesCuerpo' => '77'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '77'],



            //BARBA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'LAMPIÑO', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '56'],


            //BIGOTE
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'LAMPIÑO', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '57'],


            //PATILLAS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'POBLADA', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'ESCASA', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'LAMPIÑO', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '58'],

            //MENTÓN
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '24'],
            [ 'nombre' => 'SALIENTE', 'idPartesCuerpo' => '24'],
            [ 'nombre' => 'RECTO', 'idPartesCuerpo' => '24'],
            [ 'nombre' => 'RETRAÍDO', 'idPartesCuerpo' => '24'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '24'],



            //LABIOS INFERIOR
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'DELGADO', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'GRUESO', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'MIXTO', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '19'],

            //LABIOS DERECHO
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'DELGADO', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'GRUESO', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'MIXTO', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '20'],



           
			            
        ]);
    }
}
