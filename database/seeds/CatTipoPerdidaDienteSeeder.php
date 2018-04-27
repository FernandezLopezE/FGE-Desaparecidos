<?php

use Illuminate\Database\Seeder;

class CatTipoPerdidaDienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipos_perdida_diente')->insert([
            [ 'id' => 1, 'nombreTipoPerdida' => 'SIN INFORMACION'],
            [ 'id' => 2, 'nombreTipoPerdida' => 'ACCIDENTE'],
            [ 'id' => 3, 'nombreTipoPerdida' => 'ENFERMEDAD PERIODONTAL'],
            [ 'id' => 4, 'nombreTipoPerdida' => 'EXTRACCIÓN'],
            [ 'id' => 5, 'nombreTipoPerdida' => 'FRACTURACIÓN DE CORONA'],
            [ 'id' => 6, 'nombreTipoPerdida' => 'TIENE EL RESTO RADICULAR'],
            [ 'id' => 7, 'nombreTipoPerdida' => 'OTRO'],
        ]);
    }
}







