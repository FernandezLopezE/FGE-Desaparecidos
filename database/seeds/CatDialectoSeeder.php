<?php

use Illuminate\Database\Seeder;

class CatDialectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_dialecto')->insert([
            [ 'id' => 1, 'nombre' => 'ESPAÑOL'],
            [ 'id' => 2, 'nombre' => 'OTRO'],
            [ 'id' => 3, 'nombre' => 'AKATEKO'],
            [ 'id' => 4, 'nombre' => 'CUCAPA'],
            [ 'id' => 5, 'nombre' => 'CHOCHOTELCO'],
            [ 'id' => 6, 'nombre' => 'GUARIJIO'],
            [ 'id' => 7, 'nombre' => 'MIXTECO'],
            [ 'id' => 8, 'nombre' => 'MAN'],
            [ 'id' => 9, 'nombre' => 'POPOLOCA'],

        ]);
    }
}
