<?php

use Illuminate\Database\Seeder;

class CatComplexionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cat_complexion')->insert([
            ['nombre' => 'DELGADO',                 'imagen' => '1.jpg'],        
            ['nombre' => 'MEDIANO',                 'imagen' => '2.jpg'],
            ['nombre' => 'ROBUSTO',                 'imagen' => '3.jpg'],
            ['nombre' => 'OBESO',                   'imagen' => '4.jpg'],
            ['nombre' => 'ATLÉTICA',                'imagen' => '5.jpg'], 
        ]);
    }
}
