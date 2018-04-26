<?php

use Illuminate\Database\Seeder;

class CatTipoSonrisaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipo_sonrisa')->insert([
            [ 'id' => 1, 'nombreTipoSonrisa' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombreTipoSonrisa' => 'SEPARADOS'],
            [ 'id' => 3, 'nombreTipoSonrisa' => 'GIRADOS'],
            [ 'id' => 4, 'nombreTipoSonrisa' => 'APIÑADOS'],
        ]);
    }
}
