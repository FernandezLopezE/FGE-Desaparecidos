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
    	 DB::table('cat_calzado_tipo')->insert([
        	['nombre' => 'Sin información',			'image' => '1.jpg'],        
        	['nombre' => 'Zapato casual',			'image' => '2.jpg'],
        	['nombre' => 'Botas',					'image' => '3.jpg'],
        	['nombre' => 'Zapato alto',				'image' => '4.jpg'],
        	['nombre' => 'Tenis casual',			'image' => '5.jpg'],
            ['nombre' => 'Tenis deportivos',        'image' => '6.jpg'],
            ['nombre' => 'Sandalias',               'image' => '7.jpg'],
        	['nombre' => 'Otro tipo de calzado',	'image' => '8.jpg'],
        	['nombre' => 'No tenía calzado',		'image' => '9.jpg']    	
        ]);
    }
}
