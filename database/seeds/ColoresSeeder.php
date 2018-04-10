<?php

use Illuminate\Database\Seeder;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_colores')->insert([
        	['nombre' => 'AZÚL',					'image' => '1.jpg'],        
        	['nombre' => 'ROJO',					'image' => '2.jpg'],
        	['nombre' => 'MORADO',					'image' => '3.jpg'],
        	['nombre' => 'VERDE',					'image' => '4.jpg'],
        	['nombre' => 'NEGRO',					'image' => '5.jpg'],
            ['nombre' => 'BLANCO',        			'image' => '6.jpg'],
            ['nombre' => 'ROSA',               		'image' => '7.jpg'],
        	['nombre' => 'NARANJA',					'image' => '8.jpg'],
        	['nombre' => 'AMARILLO',				'image' => '9.jpg'], 
        	['nombre' => 'GRIS',        			'image' => '10.jpg'],
            ['nombre' => 'PLATEADO',               	'image' => '11.jpg'],
        	['nombre' => 'DORADO',					'image' => '12.jpg'],
        	['nombre' => 'CAFÉ',					'image' => '13.jpg'],
        	['nombre' => 'OTRO',					'image' => '14.jpg'],    	
        ]);
    }
}
