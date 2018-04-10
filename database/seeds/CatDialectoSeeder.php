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
            [ 'id' => 7, 'nombre' => 'AKATEKO'],
            [ 'id' => 1, 'nombre' => 'CUCAPA'],
            [ 'id' => 2, 'nombre' => 'CHOCHOTELCO'],
            [ 'id' => 3, 'nombre' => 'GUARIJIO'],
            [ 'id' => 4, 'nombre' => 'MIXTECO'],
            [ 'id' => 5, 'nombre' => 'MAN'],
            [ 'id' => 6, 'nombre' => 'POPOLOCA']
        ]);
    }
}
