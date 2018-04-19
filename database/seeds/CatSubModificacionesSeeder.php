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
         	['idParticularidadesCuerpo'=>1, 'nombre' => 'BASE/PERMANENTE'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ALACIADO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'MECHAS'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'EXTENSIONES'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'TRENZADO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'RASTAS'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'TEÑIDO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'PELUCA'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'BISOÑE'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'CORTE TIPO MILITAR'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'CORTE MOHICANO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'TATUADO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'OTRO'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'PERCING'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'PERCING'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'TEÑIDA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'RASURADA'],

            ['idParticularidadesCuerpo'=>5, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'PERFORADA/ARETES/PERCING'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'PROTESIS AUDITIVA'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'EXPANSIONES'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'CIRUGÍA'],

            ['idParticularidadesCuerpo'=>6, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'TEÑIDA'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'LARGA'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'RASURADA'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'CERRADA'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'DEPILADA'],

            ['idParticularidadesCuerpo'=>7, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'PERFORADA'],

            ['idParticularidadesCuerpo'=>8, 'nombre' => 'PERFORADA'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'DESVIADA'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'CIRUGÍA/RINOPLASTIA'],

            ['idParticularidadesCuerpo'=>9, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'TEÑIDA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'LARGA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'RASURADA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'CERRADA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'DEPILADA'],

            ['idParticularidadesCuerpo'=>10, 'nombre' => 'TATUADO'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'PERCING'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'CIRUGÍA'],

            ['idParticularidadesCuerpo'=>11, 'nombre' => 'PERCING'],

            ['idParticularidadesCuerpo'=>12, 'nombre' => 'TATUADA'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'TEÑIDA'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'LARGA'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'RASURADA'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'CERRADA'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'DEPILADA'],

    }
}
