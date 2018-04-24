<?php

use Illuminate\Database\Seeder;

class CatAdiccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_adicciones')->insert([
            ['nombre' => 'SIN INFORMACIÓN'], //1
            ['nombre' => 'ALCOHOL'], 	      //2
            ['nombre' => 'CIGARRO'],		  //3
            ['nombre' => 'DROGAS'],			  //4
            ['nombre' => 'OTRO'],			  //5
            
        ]);
    }
}
