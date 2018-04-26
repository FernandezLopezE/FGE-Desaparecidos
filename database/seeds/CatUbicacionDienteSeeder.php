<?php

use Illuminate\Database\Seeder;

class CatUbicacionDienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_ubicacion_diente')->insert([
            [ 'id' => 1, 'nombreUbicacion' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombreUbicacion' => 'SUPERIOR'],
            [ 'id' => 3, 'nombreUbicacion' => 'INFERIOR'],
        ]);
    }
}
