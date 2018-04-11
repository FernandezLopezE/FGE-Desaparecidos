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
            [ 'id' => 1, 'nombre' => 'CIVIL'],
            [ 'id' => 2, 'nombre' => 'FORMAL'],
            [ 'id' => 3, 'nombre' => 'INFORMAL'],
            [ 'id' => 4, 'nombre' => 'DEPORTIVO'],
            [ 'id' => 5, 'nombre' => 'BEBÉ'],
            [ 'id' => 6, 'nombre' => 'MARINA'],
            [ 'id' => 7, 'nombre' => 'ESCOLAR'],
            [ 'id' => 8, 'nombre' => 'SIN INFORMACIÓN']
        ]);//
    }
}
