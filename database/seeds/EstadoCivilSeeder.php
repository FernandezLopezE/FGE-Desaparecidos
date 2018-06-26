<?php

use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_estado_civil')->insert([
            [ 'id' => 7, 'nombre' => 'SIN INFORMACION'],
            [ 'id' => 1, 'nombre' => 'SOLTERO(A)'],
            [ 'id' => 2, 'nombre' => 'CASADO(A)'],
            [ 'id' => 3, 'nombre' => 'VIUDO(A)'],
            [ 'id' => 4, 'nombre' => 'DIVORCIADO(A)'],
            [ 'id' => 5, 'nombre' => 'CONCUBINATO'],
            [ 'id' => 6, 'nombre' => 'UNION LIBRE']
        ]);
    }
}
