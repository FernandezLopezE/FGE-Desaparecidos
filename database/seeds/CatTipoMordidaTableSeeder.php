<?php

use Illuminate\Database\Seeder;

class CatTipoMordidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cat_tipo_mordida')->insert([
            [ 'id' => 1, 'nombreTipoMordida' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombreTipoMordida' => 'ABIERTA'],
            [ 'id' => 3, 'nombreTipoMordida' => 'CERRADA'],
            [ 'id' => 4, 'nombreTipoMordida' => 'CRUZADA'],
        ]);
    }
}
