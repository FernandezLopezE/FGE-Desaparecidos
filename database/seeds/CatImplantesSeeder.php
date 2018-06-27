<?php

use Illuminate\Database\Seeder;

class CatImplantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('cat_implantes')->insert([
            ['nombre' => 'SIN INFORMACIÓN'],    //1
            ['nombre' => 'MARCAPASOS'], 	   //2
            ['nombre' => 'GLUTEOS'],		  //3
            ['nombre' => 'SENOS'],			//4
            ['nombre' => 'TORNILLOS'],				//5
            ['nombre' => 'PLACA DE OSTEOSÍNTESIS'],	//6
            ['nombre' => 'OTRO'],				//7
            
        ]);
    }
}
