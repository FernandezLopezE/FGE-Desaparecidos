<?php

use Illuminate\Database\Seeder;

class CatParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_parentesco')->insert([
            [ 'id' => 1, 'nombre' => 'PADRE'],
            [ 'id' => 2, 'nombre' => 'MADRE'],
            [ 'id' => 3, 'nombre' => 'ESPOSO(A)'],
            [ 'id' => 4, 'nombre' => 'HIJO(A)'],
            [ 'id' => 5, 'nombre' => 'CONCUVINO'],
            [ 'id' => 6, 'nombre' => 'TIA'],
            [ 'id' => 7, 'nombre' => 'NIETO'],
            [ 'id' => 8, 'nombre' => 'PADRINO'],
            [ 'id' => 9, 'nombre' => 'AHIJADO'],

        ]);
    }
}
