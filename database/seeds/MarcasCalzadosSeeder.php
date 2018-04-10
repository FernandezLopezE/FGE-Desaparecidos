<?php

use Illuminate\Database\Seeder;

class MarcasCalzadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('cat_marcas_calzados')->insert([
        	['nombre' => 'Sin información',			'image' => '1.jpg'],       	
        	['nombre' => 'Converse',				'image' => '2.jpg'],
        	['nombre' => 'Vans',					'image' => '3.jpg'],
        	['nombre' => 'Levis',					'image' => '4.jpg'],
        	['nombre' => 'Nike',					'image' => '5.jpg'],
        	['nombre' => 'Adidas',					'image' => '6.jpg'],
        	['nombre' => 'Puma',					'image' => '7.jpg'],
        	['nombre' => 'Fila',					'image' => '8.jpg'],
        	['nombre' => 'Ecko',					'image' => '9.jpg'],
        	['nombre' => 'Flexi',					'image' => '10.jpg'],
        	['nombre' => 'Andrea',					'image' => '11.jpg'],
        	['nombre' => 'Reebok',					'image' => '12.jpg'],
        	['nombre' => 'Lee',						'image' => '13.jpg'],
        	['nombre' => 'Pirma',					'image' => '14.jpg'],
        	['nombre' => 'Concord',					'image' => '15.jpg'],
        	['nombre' => 'Under armour',			'image' => '16.jpg'],
        	['nombre' => 'New Balance',				'image' => '17.jpg'],
        	['nombre' => 'Caterpillar',				'image' => '18.jpg'],
        	['nombre' => 'Sahara',					'image' => '19.jpg'],
        	['nombre' => 'JLO',						'image' => '20.jpg'],
        	['nombre' => 'Tommy Hilfiger',			'image' => '21.jpg'],
        	['nombre' => 'Lacoste',					'image' => '22.jpg'],
        	['nombre' => 'Guess',					'image' => '23.jpg'],
        	['nombre' => 'Calvin Klein',			'image' => '24.jpg'],
        	['nombre' => 'Crocs',					'image' => '25.jpg'],
            ['nombre' => 'Otra marca',              'image' => '26.jpg'],
            ['nombre' => 'No tenía marca',          'image' => '27.jpg']
        	  	
        ]);

    }
}
