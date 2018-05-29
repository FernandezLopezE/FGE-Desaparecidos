<?php

use Illuminate\Database\Seeder;

class CatTamanoCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_tamano_cuerpo')->insert([
        	//CABELLO
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'CORTO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'MEDIANO AL HOMBRO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'LARGO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'RAPADO', 'idPartesCuerpo' => '55'],

            //OJO IZQUIERDO
			[ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '37'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '37'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '37'],
            [ 'nombre' => 'PEQUEÑO', 'idPartesCuerpo' => '37'],

            //OJO DERECHO
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '36'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '36'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '36'],
            [ 'nombre' => 'PEQUEÑO', 'idPartesCuerpo' => '36'],

            //AMBOS OJOS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '74'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '74'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '74'],
            [ 'nombre' => 'PEQUEÑO', 'idPartesCuerpo' => '74'],

            //AMBOS LABIOS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '72'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '72'],
            [ 'nombre' => 'GRANDE Y ALARGADA', 'idPartesCuerpo' => '72'],
            [ 'nombre' => 'MEDIANA', 'idPartesCuerpo' => '72'],
            [ 'nombre' => 'PEQUEÑA', 'idPartesCuerpo' => '72'],

            //LABIO INFERIOR

            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'GRANDE Y ALARGADA', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'MEDIANA', 'idPartesCuerpo' => '19'],
            [ 'nombre' => 'PEQUEÑA', 'idPartesCuerpo' => '19'],
			            
            //LABIO SUPERIOR
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'GRANDE Y ALARGADA', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'MEDIANA', 'idPartesCuerpo' => '20'],
            [ 'nombre' => 'PEQUEÑA', 'idPartesCuerpo' => '20'],
        ]);
    }
}
