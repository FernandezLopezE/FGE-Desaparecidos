<?php

use Illuminate\Database\Seeder;

class CatSenasParticularesUbicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_senas_particulares_ubicaciones')->insert([
            [ 'id' => 1, 'nombre' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombre' => 'ABDOMEN'],
            [ 'id' => 3, 'nombre' => 'ANTEBRAZO'],
            [ 'id' => 4, 'nombre' => 'BRAZO'],
            [ 'id' => 5, 'nombre' => 'CADERA/ESPINILLA'],
            [ 'id' => 6, 'nombre' => 'CEJA'],
            [ 'id' => 7, 'nombre' => 'CODO'],
            [ 'id' => 8, 'nombre' => 'CUELLO'],
            [ 'id' => 9, 'nombre' => 'DEDO'],
            [ 'id' => 10, 'nombre' => 'ESPALDA'],
            [ 'id' => 11, 'nombre' => 'FRENTE'],
            [ 'id' => 12, 'nombre' => 'HOMBRO'],
            [ 'id' => 13, 'nombre' => 'LABIO'],
            [ 'id' => 14, 'nombre' => 'MANO'],
            [ 'id' => 15, 'nombre' => 'MEJILLA'],
            [ 'id' => 16, 'nombre' => 'MENTÓN'],
            [ 'id' => 17, 'nombre' => 'MUÑECA'],
            [ 'id' => 18, 'nombre' => 'MUSLO'],
            [ 'id' => 19, 'nombre' => 'NALGA'],
            [ 'id' => 20, 'nombre' => 'NARIZ'],
            [ 'id' => 21, 'nombre' => 'NUCA'],
            [ 'id' => 22, 'nombre' => 'OMBLIGO'],
            [ 'id' => 23, 'nombre' => 'OREJA'],
            [ 'id' => 24, 'nombre' => 'PALMA'],
            [ 'id' => 25, 'nombre' => 'PANTORRILLA'],
            [ 'id' => 26, 'nombre' => 'PECHO'],
            [ 'id' => 27, 'nombre' => 'PIE'],
            [ 'id' => 28, 'nombre' => 'PIERNA'],
            [ 'id' => 29, 'nombre' => 'RODILLA'],
            [ 'id' => 30, 'nombre' => 'TALÓN'],
            [ 'id' => 31, 'nombre' => 'TOBILLO'],
            [ 'id' => 32, 'nombre' => 'DORSO'],
            [ 'id' => 33, 'nombre' => 'OTRO']
        ]);
    }
}
