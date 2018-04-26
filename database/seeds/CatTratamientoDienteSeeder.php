<?php

use Illuminate\Database\Seeder;

class CatTratamientoDienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tratamiento_diente')->insert([
            [ 'id' => 1, 'nombreTratamiento' => 'SIN INFORMACION'],
            [ 'id' => 2, 'nombreTratamiento' => 'AMALGAMA'],
            [ 'id' => 3, 'nombreTratamiento' => 'BLANQUEAMIENTO DENTAL'],
            [ 'id' => 4, 'nombreTratamiento' => 'BRACKETS'],
            [ 'id' => 5, 'nombreTratamiento' => 'CARILLA'],
            [ 'id' => 6, 'nombreTratamiento' => 'CORONA ESTETICA'],
            [ 'id' => 7, 'nombreTratamiento' => 'ENDODONCIA'],
            [ 'id' => 8, 'nombreTratamiento' => 'IMPLANTE'],
            [ 'id' => 9, 'nombreTratamiento' => 'OBTURACIÓN TEMPORAL'],
            [ 'id' => 10, 'nombreTratamiento' => 'PROTESIS FINA'],
            [ 'id' => 11, 'nombreTratamiento' => 'PROTESIS REMOVIBLE'],
            [ 'id' => 12, 'nombreTratamiento' => 'PROTESIS TOTAL'],
            [ 'id' => 13, 'nombreTratamiento' => 'RESINA'],
            [ 'id' => 14, 'nombreTratamiento' => 'RETENEDOR'],
            [ 'id' => 15, 'nombreTratamiento' => 'SELLADOR FS'],
            [ 'id' => 16, 'nombreTratamiento' => 'OTRO'],
        ]);
    }
}