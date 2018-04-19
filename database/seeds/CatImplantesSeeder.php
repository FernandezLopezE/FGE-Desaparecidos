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
            ['nombre' => 'MARCAPASOS'], 	//1
            ['nombre' => 'GLUTEOS'],			//2
            ['nombre' => 'SENOS'],			//3
            ['nombre' => 'TORNILLOS'],				//4
            ['nombre' => 'PLACA DE OSTEOSÍNTESIS'],	//5
            ['nombre' => 'OTRO'],				//12
            
        ]);
    }
}
