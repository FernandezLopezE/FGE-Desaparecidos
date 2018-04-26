<?php

use Illuminate\Database\Seeder;

class CatTamanoDienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tamano_diente')->insert([
            [ 'id' => 1, 'nombreTamano' => 'SIN INFORMACION'],
            [ 'id' => 2, 'nombreTamano' => 'GRANDES'],
            [ 'id' => 3, 'nombreTamano' => 'MEDIANOS'],
            [ 'id' => 4, 'nombreTamano' => 'PEQUEÑOS'],
        ]);
    }
}