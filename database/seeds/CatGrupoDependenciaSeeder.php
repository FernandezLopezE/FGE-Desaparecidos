<?php

use Illuminate\Database\Seeder;

class CatGrupoDependenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_grupo_dependencias')->insert([
            //['nombre' => 'SIN INFORMACIÓN'], //1
            ['nombre' => 'SECRETARÍA DE COMUNICACIONES Y TRANSPORTE'], 	      //2 
            ['nombre' => 'CENTROS DE RETENCIÓN'],		  //3
            ['nombre' => 'ESTACIONES MIGRATORIAS'],			  //4
          //  ['nombre' => 'OTRO'],			  //5
            
        ]);
    }
}

