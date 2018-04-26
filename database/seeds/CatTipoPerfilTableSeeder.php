<?php

use Illuminate\Database\Seeder;

class CatTipoPerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipo_perfil')->insert([
            [ 'id' => 1, 'nombrePerfil' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombrePerfil' => 'RECTO'],
            [ 'id' => 3, 'nombrePerfil' => 'CÓNCAVO'],
            [ 'id' => 4, 'nombrePerfil' => 'CONVEXO'],
        ]);
    }
}
