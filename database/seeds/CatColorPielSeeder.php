<?php

use Illuminate\Database\Seeder;

class CatColorPielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_color_piel')->insert([
            ['nombre' => 'BLANCA',                 'imagen' => '1.jpg'],        
            ['nombre' => 'MORENA CLARA',           'imagen' => '2.jpg'],
            ['nombre' => 'MORENA OBSCURA',         'imagen' => '3.jpg'],
            ['nombre' => 'NEGRA',                  'imagen' => '4.jpg'],
            ['nombre' => 'ALBINO',                 'imagen' => '5.jpg'], 
            ['nombre' => 'AMARILLO',               'imagen' => '6.jpg'], 
        ]);
    }
}
