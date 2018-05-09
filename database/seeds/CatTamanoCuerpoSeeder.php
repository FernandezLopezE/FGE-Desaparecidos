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

            //BOCA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '71'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '71'],
            [ 'nombre' => 'GRANDE Y ALARGADA', 'idPartesCuerpo' => '71'],
            [ 'nombre' => 'MEDIANA', 'idPartesCuerpo' => '71'],
            [ 'nombre' => 'PEQUEÑA', 'idPartesCuerpo' => '71'],
			            
        ]);
    }
}
