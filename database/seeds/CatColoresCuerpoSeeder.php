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
            ['idPartesCuerpo'=>24, 'nombre' => 'CAFÉ CLARO',            'imagen' => '1.jpg'],       
            ['idPartesCuerpo'=>24, 'nombre' => 'CAFÉ OSCURO',           'imagen' => '2.jpg'],
            ['idPartesCuerpo'=>24, 'nombre' => 'NEGRO',          	   'imagen' => '3.jpg'],
            ['idPartesCuerpo'=>24, 'nombre' => 'AZUL',                'imagen' => '4.jpg'],
            ['idPartesCuerpo'=>24, 'nombre' => 'VERDE',                'imagen' => '5.jpg'], 
            ['idPartesCuerpo'=>24, 'nombre' => 'GRIS',                'imagen' => '7.jpg'],
            ['idPartesCuerpo'=>24, 'nombre' => 'OTRO',                'imagen' => '7-1.jpg'], 
            ['idPartesCuerpo'=>34, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>34, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>34, 'nombre' => 'NEGRO',                 'imagen' => '9.jpg'],
            ['idPartesCuerpo'=>34, 'nombre' => 'RUBIO',          	   'imagen' => '10.jpg'],
            ['idPartesCuerpo'=>34, 'nombre' => 'PELIRROJO',             'imagen' => '11.jpg'],
            ['idPartesCuerpo'=>34, 'nombre' => 'ENTRECANO',             'imagen' => '12.jpg'], 
            ['idPartesCuerpo'=>34, 'nombre' => 'BLANCO/CANOSO',         'imagen' => '13.jpg'], 
            ['idPartesCuerpo'=>35, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '14.jpg'],
            ['idPartesCuerpo'=>35, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '15.jpg'],
            ['idPartesCuerpo'=>35, 'nombre' => 'NEGRO',                 'imagen' => '16.jpg'],
            ['idPartesCuerpo'=>35, 'nombre' => 'RUBIO',          	   'imagen' => '17.jpg'],
            ['idPartesCuerpo'=>35, 'nombre' => 'PELIRROJO',             'imagen' => '18.jpg'],
            ['idPartesCuerpo'=>35, 'nombre' => 'ENTRECANO',             'imagen' => '19.jpg'], 
            ['idPartesCuerpo'=>36, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '20.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '21.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'NEGRO',                 'imagen' => '22.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'RUBIO',          	   'imagen' => '23.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'PELIRROJO',             'imagen' => '24.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'ENTRECANO',             'imagen' => '25.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '26.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '27.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'NEGRO',                 'imagen' => '28.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'RUBIO',          	   'imagen' => '29.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'PELIRROJO',             'imagen' => '30.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'ENTRECANO',             'imagen' => '31.jpg'],  
        ]);
    }
}
