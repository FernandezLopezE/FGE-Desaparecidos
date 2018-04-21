<?php

use Illuminate\Database\Seeder;

class CatSubModificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('cat_sub_modificaciones')->insert([
         	['idModificacionesCuerpo'=>1, 'nombre' => 'BASE/PERMANENTE'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'ALACIADO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'MECHAS'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'EXTENSIONES'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'TRENZADO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'RASTAS'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'TEÑIDO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'PELUCA'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'BISOÑE'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'CORTE TIPO MILITAR'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'CORTE MOHICANO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>2, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>2, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>5, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'PERFORADA/ARETES/PERCING'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'PROTESIS AUDITIVA'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>6, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'LARGA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'CERRADA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'DEPILADA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>7, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>8, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'DESVIADA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'CIRUGÍA/RINOPLASTIA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>9, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'LARGA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'CERRADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'DEPILADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>10, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>11, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>12, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'LARGA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'CERRADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'DEPILADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'OTRO'],

            ['idModificacionesCuerpo'=>1, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>2, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'SIN INFORMACIÓN'],
            //['idModificacionesCuerpo'=>4, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'SIN INFORMACIÓN'],
            /*['idModificacionesCuerpo'=>13, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>15, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>16, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>17, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>18, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>19, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>20, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>23, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>24, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>25, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>26, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>27, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>28, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>29, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>30, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'SIN INFORMACIÓN'],*/

        ]);

    }
}
