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
            [ 'nombre' => 'SIN INFORMACIÓN', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'CORTO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'MEDIANO AL HOMBRO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'LARGO', 'idPartesCuerpo' => '2'],
            [ 'nombre' => 'RAPADO', 'idPartesCuerpo' => '2'],

            //OJO IZQUIERDO
			[ 'nombre' => 'SIN INFORMACIÓN', 'idPartesCuerpo' => '9'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '9'],
            [ 'nombre' => 'MEDIANO', 'idPartesCuerpo' => '9'],
            [ 'nombre' => 'PEQUEÑO', 'idPartesCuerpo' => '9'],

            

            //boca
            [ 'nombre' => 'SIN INFORMACIÓN', 'idPartesCuerpo' => '13'],
            [ 'nombre' => 'GRANDE', 'idPartesCuerpo' => '13'],
            [ 'nombre' => 'GRANDE Y ALARGADA', 'idPartesCuerpo' => '13'],
            [ 'nombre' => 'MEDIANA', 'idPartesCuerpo' => '13'],
            [ 'nombre' => 'PEQUEÑA', 'idPartesCuerpo' => '13'],

            
        ]);
    }
}
