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

            //OJO DERECHO
            ['idPartesCuerpo'=>36, 'nombre' => 'CAFÉ CLARO', 'imagen' => '1.jpg'],       
            ['idPartesCuerpo'=>36, 'nombre' => 'CAFÉ OSCURO',  'imagen' => '2.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'NEGRO', 'imagen' => '3.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'AZUL', 'imagen' => '4.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'VERDE', 'imagen' => '5.jpg'], 
            ['idPartesCuerpo'=>36, 'nombre' => 'GRIS', 'imagen' => '7.jpg'],
            ['idPartesCuerpo'=>36, 'nombre' => 'OTRO', 'imagen' => '7-1.jpg'], 

            //OJO IZQUIERDO
            ['idPartesCuerpo'=>37, 'nombre' => 'CAFÉ CLARO', 'imagen' => '1.jpg'],       
            ['idPartesCuerpo'=>37, 'nombre' => 'CAFÉ OSCURO',  'imagen' => '2.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'NEGRO', 'imagen' => '3.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'AZUL', 'imagen' => '4.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'VERDE', 'imagen' => '5.jpg'], 
            ['idPartesCuerpo'=>37, 'nombre' => 'GRIS', 'imagen' => '7.jpg'],
            ['idPartesCuerpo'=>37, 'nombre' => 'OTRO', 'imagen' => '7-1.jpg'], 


            //CABELLO
            ['idPartesCuerpo'=>55, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'NEGRO',                 'imagen' => '9.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'RUBIO',          	   'imagen' => '10.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'PELIRROJO',             'imagen' => '11.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'ENTRECANO',             'imagen' => '12.jpg'], 
            ['idPartesCuerpo'=>55, 'nombre' => 'BLANCO/CANOSO',         'imagen' => '13.jpg'],
            ['idPartesCuerpo'=>55, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],
            //BARBA
            ['idPartesCuerpo'=>56, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '14.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '15.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'NEGRO',                 'imagen' => '16.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'RUBIO',          	   'imagen' => '17.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'PELIRROJO',             'imagen' => '18.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'ENTRECANO',             'imagen' => '19.jpg'],
            ['idPartesCuerpo'=>56, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],
            //BIGOTE
            ['idPartesCuerpo'=>57, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '20.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '21.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'NEGRO',                 'imagen' => '22.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'RUBIO',          	   'imagen' => '23.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'PELIRROJO',             'imagen' => '24.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'ENTRECANO',             'imagen' => '25.jpg'],
            ['idPartesCuerpo'=>57, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],
            //PATILLAS
            ['idPartesCuerpo'=>58, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>58, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '26.jpg'],
            ['idPartesCuerpo'=>58, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '27.jpg'],
            ['idPartesCuerpo'=>58, 'nombre' => 'NEGRO',                 'imagen' => '28.jpg'],
            ['idPartesCuerpo'=>58, 'nombre' => 'RUBIO',          	   'imagen' => '29.jpg'],
            ['idPartesCuerpo'=>58, 'nombre' => 'PELIRROJO',             'imagen' => '30.jpg'],
            ['idPartesCuerpo'=>58, 'nombre' => 'ENTRECANO',             'imagen' => '31.jpg'],  
            ['idPartesCuerpo'=>58, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],
        ]);
    }
}
