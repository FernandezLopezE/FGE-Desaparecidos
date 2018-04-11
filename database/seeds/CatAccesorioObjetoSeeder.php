<?php

use Illuminate\Database\Seeder;

class CatAccesorioObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cat_accesorios_objetos')->insert([
            [ 'id' => 1, 'nombre' => 'ANTEOJOS'],
            [ 'id' => 2, 'nombre' => 'BASTÓN'],
            [ 'id' => 3, 'nombre' => 'ANILLOS'],
            [ 'id' => 4, 'nombre' => 'MEDALLAS'],
            [ 'id' => 5, 'nombre' => 'CREDENCIALES'],
            [ 'id' => 6, 'nombre' => 'CINTURÓN'],
            [ 'id' => 7, 'nombre' => 'RELOJ'],
            [ 'id' => 8, 'nombre' => 'COLLARES'],
            [ 'id' => 9, 'nombre' => 'PULSERAS'],
            [ 'id' => 10, 'nombre' => 'CELULAR'],
            [ 'id' => 11, 'nombre' => 'SOMBRERO'],
            [ 'id' => 12, 'nombre' => 'BOLSA'],
            [ 'id' => 13, 'nombre' => 'CADENAS'],
            [ 'id' => 14, 'nombre' => 'CARTERA'],
            [ 'id' => 15, 'nombre' => 'TARJETA DE CRÉDITO/DÉBITO'],
            [ 'id' => 16, 'nombre' => 'OTRO']
        ]);//
    }
}
