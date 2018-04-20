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
            [ 'id' => 2, 'nombreTamano' => 'COMPLETOS'],
            [ 'id' => 3, 'nombreTamano' => 'GRANDES'],
            [ 'id' => 4, 'nombreTamano' => 'MEDIANOS'],
            [ 'id' => 5, 'nombreTamano' => 'PEQUEÑOS'],
        ]);
    }
}