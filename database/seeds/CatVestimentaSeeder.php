<?php

use Illuminate\Database\Seeder;

class CatVestimentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_vestimenta')->insert([
            [ 'id' => 1, 'nombre' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombre' => 'CIVIL'],
            [ 'id' => 3, 'nombre' => 'FORMAL'],
            [ 'id' => 4, 'nombre' => 'INFORMAL'],
            [ 'id' => 5, 'nombre' => 'DEPORTIVO'],
            [ 'id' => 6, 'nombre' => 'BEBÉ'],
            [ 'id' => 7, 'nombre' => 'MARINA'],
            [ 'id' => 8, 'nombre' => 'ESCOLAR']
        ]);//
    }
}
