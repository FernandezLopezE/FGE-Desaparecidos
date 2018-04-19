<?php

use Illuminate\Database\Seeder;

class CatColoresCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_colores_cuerpo')->insert([
            ['idParteCuerpo'=>24, 'nombre' => 'CAFÉ CLARO',            'imagen' => '1.jpg'],       
            ['idParteCuerpo'=>24, 'nombre' => 'CAFÉ OSCURO',           'imagen' => '2.jpg'],
            ['idParteCuerpo'=>24, 'nombre' => 'NEGROS',          	   'imagen' => '3.jpg'],
            ['idParteCuerpo'=>24, 'nombre' => 'AZULES',                'imagen' => '4.jpg'],
            ['idParteCuerpo'=>24, 'nombre' => 'VERDES',                'imagen' => '5.jpg'], 
            ['idParteCuerpo'=>24, 'nombre' => 'GRISES',                'imagen' => '7.jpg'], 
            ['idParteCuerpo'=>34, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '8.jpg'],
            ['idParteCuerpo'=>34, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '8.jpg'],
            ['idParteCuerpo'=>34, 'nombre' => 'NEGRO',                 'imagen' => '9.jpg'],
            ['idParteCuerpo'=>34, 'nombre' => 'RUBIO',          	   'imagen' => '10.jpg'],
            ['idParteCuerpo'=>34, 'nombre' => 'PELIRROJO',             'imagen' => '11.jpg'],
            ['idParteCuerpo'=>34, 'nombre' => 'ENTRECANO',             'imagen' => '12.jpg'], 
            ['idParteCuerpo'=>34, 'nombre' => 'BLANCO/CANOSO',         'imagen' => '13.jpg'], 
            ['idParteCuerpo'=>35, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '14.jpg'],
            ['idParteCuerpo'=>35, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '15.jpg'],
            ['idParteCuerpo'=>35, 'nombre' => 'NEGRO',                 'imagen' => '16.jpg'],
            ['idParteCuerpo'=>35, 'nombre' => 'RUBIO',          	   'imagen' => '17.jpg'],
            ['idParteCuerpo'=>35, 'nombre' => 'PELIRROJO',             'imagen' => '18.jpg'],
            ['idParteCuerpo'=>35, 'nombre' => 'ENTRECANO',             'imagen' => '19.jpg'], 
            ['idParteCuerpo'=>36, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '20.jpg'],
            ['idParteCuerpo'=>36, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '21.jpg'],
            ['idParteCuerpo'=>36, 'nombre' => 'NEGRO',                 'imagen' => '22.jpg'],
            ['idParteCuerpo'=>36, 'nombre' => 'RUBIO',          	   'imagen' => '23.jpg'],
            ['idParteCuerpo'=>36, 'nombre' => 'PELIRROJO',             'imagen' => '24.jpg'],
            ['idParteCuerpo'=>36, 'nombre' => 'ENTRECANO',             'imagen' => '25.jpg'],
            ['idParteCuerpo'=>37, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '26.jpg'],
            ['idParteCuerpo'=>37, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '27.jpg'],
            ['idParteCuerpo'=>37, 'nombre' => 'NEGRO',                 'imagen' => '28.jpg'],
            ['idParteCuerpo'=>37, 'nombre' => 'RUBIO',          	   'imagen' => '29.jpg'],
            ['idParteCuerpo'=>37, 'nombre' => 'PELIRROJO',             'imagen' => '30.jpg'],
            ['idParteCuerpo'=>37, 'nombre' => 'ENTRECANO',             'imagen' => '31.jpg'],  
        ]);
    }
}
