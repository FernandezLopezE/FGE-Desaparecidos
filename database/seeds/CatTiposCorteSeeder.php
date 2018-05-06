<?php

use Illuminate\Database\Seeder;

class CatTiposCorteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_tipos_corte')->insert([
        	//CABELLO
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'CORTE TIPO MILITAR', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'CORTE TIPO MOHICANO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'TATUADO', 'idPartesCuerpo' => '55'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '55'],

           //BARBA
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'LARGA', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'CERRADA', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '56'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '56'],


           //BIGOTE
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'LARGA', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'CERRADA', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '57'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '57'],


           //PATILLAS
            [ 'nombre' => 'SIN INFORMACION', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'LARGA', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'RASURADA', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'CERRADA', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'DEPILADA', 'idPartesCuerpo' => '58'],
            [ 'nombre' => 'OTRO', 'idPartesCuerpo' => '58'],
			            
        ]);
    }
}
