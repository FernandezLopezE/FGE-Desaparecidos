<?php

use Illuminate\Database\Seeder;

class CatMalosHabitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_malos_habitos')->insert([
            [ 'id' => 1, 'nombreMalHabito' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombreMalHabito' => 'MORDERSE LAS UÑAS'],
            [ 'id' => 3, 'nombreMalHabito' => 'MORDER ALGÚN OBJETO'],
        ]);
    }
}
