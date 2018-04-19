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
            ['nombre' => 'DELGADO',                 'image' => '1.jpg'],        
            ['nombre' => 'MEDIANO',                 'image' => '2.jpg'],
            ['nombre' => 'ROBUSTO',                 'image' => '3.jpg'],
            ['nombre' => 'OBESO',                   'image' => '4.jpg'],
            ['nombre' => 'ATLÉTICA',                'image' => '5.jpg'], 
        ]);
    }
}
