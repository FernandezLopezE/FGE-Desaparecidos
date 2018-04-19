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
            ['nombre' => 'BLANCA',                 'image' => '1.jpg'],        
            ['nombre' => 'MORENA CLARA',           'image' => '2.jpg'],
            ['nombre' => 'MORENA OBSCURA',         'image' => '3.jpg'],
            ['nombre' => 'NEGRA',                  'image' => '4.jpg'],
            ['nombre' => 'ALBINO',                 'image' => '5.jpg'], 
            ['nombre' => 'AMARILLO',                'image' => '5.jpg'], 
        ]);
    }
}
