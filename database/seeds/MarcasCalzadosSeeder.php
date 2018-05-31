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

     DB::table('cat_marcas')->insert([
        	['nombre' => 'SIN INFORMACIÓN',			'image' => '1.jpg'],       	
        	['nombre' => 'CONVERSE',				'image' => '2.jpg'],
        	['nombre' => 'VANS',					'image' => '3.jpg'],
        	['nombre' => 'LEVIS',					'image' => '4.jpg'],
        	['nombre' => 'NIKE',					'image' => '5.jpg'],
        	['nombre' => 'ADIDAS',					'image' => '6.jpg'],
        	['nombre' => 'PUMA',					'image' => '7.jpg'],
        	['nombre' => 'FILA',					'image' => '8.jpg'],
        	['nombre' => 'ECKO',					'image' => '9.jpg'],
        	['nombre' => 'FLEXI',					'image' => '10.jpg'],
        	['nombre' => 'ANDREA',					'image' => '11.jpg'],
        	['nombre' => 'REEBOK',					'image' => '12.jpg'],
        	['nombre' => 'LEE',						'image' => '13.jpg'],
        	['nombre' => 'PIRMA',					'image' => '14.jpg'],
        	['nombre' => 'CONCORD',					'image' => '15.jpg'],
        	['nombre' => 'UNDER ARMOUR',			'image' => '16.jpg'],
        	['nombre' => 'NEW BALANCE',				'image' => '17.jpg'],
        	['nombre' => 'CATERPILLAR',				'image' => '18.jpg'],
        	['nombre' => 'SAHARA',					'image' => '19.jpg'],
        	['nombre' => 'JLO',						'image' => '20.jpg'],
        	['nombre' => 'TOMMY HILFIGHER',			'image' => '21.jpg'],
        	['nombre' => 'LACOSTE',					'image' => '22.jpg'],
        	['nombre' => 'GUESS',					'image' => '23.jpg'],
        	['nombre' => 'CAKVIN KLEIN',			'image' => '24.jpg'],
        	['nombre' => 'CROCS',					'image' => '25.jpg'],
            ['nombre' => 'OTRA MARCA',              'image' => '26.jpg'],
            ['nombre' => 'NO TENÍA MARCA',          'image' => '27.jpg']
        	  	
        ]);

    }
}
