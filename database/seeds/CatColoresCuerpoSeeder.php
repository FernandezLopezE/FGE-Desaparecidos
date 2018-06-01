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
            ['idPartesCuerpo'=>9, 'nombre' => 'SIN INFORMACIÓN', 'imagen' => '7-1.jpg'],
            ['idPartesCuerpo'=>9, 'nombre' => 'CAFÉ CLARO', 'imagen' => '1.jpg'],       
            ['idPartesCuerpo'=>9, 'nombre' => 'CAFÉ OSCURO',  'imagen' => '2.jpg'],
            ['idPartesCuerpo'=>9, 'nombre' => 'NEGRO', 'imagen' => '3.jpg'],
            ['idPartesCuerpo'=>9, 'nombre' => 'AZUL', 'imagen' => '4.jpg'],
            ['idPartesCuerpo'=>9, 'nombre' => 'VERDE', 'imagen' => '5.jpg'], 
            ['idPartesCuerpo'=>9, 'nombre' => 'GRIS', 'imagen' => '7.jpg'],
            ['idPartesCuerpo'=>9, 'nombre' => 'OTRO', 'imagen' => '7-1.jpg'], 
 

            //CABELLO
            ['idPartesCuerpo'=>2, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'NEGRO',                 'imagen' => '9.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'RUBIO',          	   'imagen' => '10.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'PELIRROJO',             'imagen' => '11.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ENTRECANO',             'imagen' => '12.jpg'], 
            ['idPartesCuerpo'=>2, 'nombre' => 'BLANCO/CANOSO',         'imagen' => '13.jpg'],
            ['idPartesCuerpo'=>2, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],

            //BARBA
            ['idPartesCuerpo'=>3, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '14.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '15.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'NEGRO',                 'imagen' => '16.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'RUBIO',          	   'imagen' => '17.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'PELIRROJO',             'imagen' => '18.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'ENTRECANO',             'imagen' => '19.jpg'],
            ['idPartesCuerpo'=>3, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],

            //BIGOTE
            ['idPartesCuerpo'=>4, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '20.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '21.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'NEGRO',                 'imagen' => '22.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'RUBIO',          	   'imagen' => '23.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'PELIRROJO',             'imagen' => '24.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'ENTRECANO',             'imagen' => '25.jpg'],
            ['idPartesCuerpo'=>4, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],

            //PATILLAS
            ['idPartesCuerpo'=>5, 'nombre' => 'SIN INFORMACIÓN',         'imagen' => '8.jpg'],
            ['idPartesCuerpo'=>5, 'nombre' => 'CASTAÑO CLARO',         'imagen' => '26.jpg'],
            ['idPartesCuerpo'=>5, 'nombre' => 'CASTAÑO OSCURO',        'imagen' => '27.jpg'],
            ['idPartesCuerpo'=>5, 'nombre' => 'NEGRO',                 'imagen' => '28.jpg'],
            ['idPartesCuerpo'=>5, 'nombre' => 'RUBIO',          	   'imagen' => '29.jpg'],
            ['idPartesCuerpo'=>5, 'nombre' => 'PELIRROJO',             'imagen' => '30.jpg'],
            ['idPartesCuerpo'=>5, 'nombre' => 'ENTRECANO',             'imagen' => '31.jpg'],  
            ['idPartesCuerpo'=>5, 'nombre' => 'OTRO',         'imagen' => '8.jpg'],
        ]);
    }
}
