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
            ['nombre' => 'ALCOHOL'], 	//1
            ['nombre' => 'CIGARRO'],			//2
            ['nombre' => 'DROGAS'],			//3
            ['nombre' => 'OTRO'],				//12
            
        ]);
    }
}
