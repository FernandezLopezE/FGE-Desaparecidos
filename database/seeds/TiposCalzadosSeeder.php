<?php

use Illuminate\Database\Seeder;

class TiposCalzadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('cat_tipos_calzados')->insert([
        	['nombre' => 'SIN INFORMACIÓN',			'image' => '1.jpg'],        
        	['nombre' => 'ZAPATO CASUAL',			'image' => '2.jpg'],
        	['nombre' => 'BOTAS',					'image' => '3.jpg'],
        	['nombre' => 'ZAPATO ALTO',				'image' => '4.jpg'],
        	['nombre' => 'TENIS CASUAL',			'image' => '5.jpg'],
            ['nombre' => 'TENIS DEPORTIVOS',        'image' => '6.jpg'],
            ['nombre' => 'SANDALIAS',               'image' => '7.jpg'],
        	['nombre' => 'OTRO TIPO DE CALZADO',	'image' => '8.jpg'],
        	['nombre' => 'NO TENÍA CALZADO',		'image' => '9.jpg']    	
        ]);
    }
}
