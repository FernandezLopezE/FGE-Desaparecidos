<?php

use Illuminate\Database\Seeder;

class CatCorreosExternosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_correos_externos')->insert([
            [ 'nombre' => 'Alfredo Ramirez Anastacio', 					'correo' => 'xbox.07@hotmail.com'],
            [ 'nombre' => 'Carlos Avila Aguilar', 						'correo' => 'cavila@fiscaliaveracruz.gob.mx'],
            [ 'nombre' => 'Edgar Santiago Jimenez Alarcon', 			'correo' => 'esjimenez@fiscaliaveracruz.gob.mx'],
            [ 'nombre' => 'Daniel Landa', 								'correo' => 'dlanda@fiscaliaveracruz.gob.mx'],
            [ 'nombre' => 'Ruben Ochoa Rodriguez ', 					'correo' => 'ochoa.rrub@gmail.com'],
            [ 'nombre' => 'Eduardo Fernandez López ', 					'correo' => 'efernandezl@fiscaliavercruz.gob.mx'],
            [ 'nombre' => 'Berenice Contreras Dominguez ', 				'correo' => 'bnicecd@gmail.com'],
            [ 'nombre' => 'Alejandro Fernandez Toledo ',                'correo' => 'alejandro.f.toledo@gmail.com'],
            [ 'nombre' => 'Araceli ',                                   'correo' => 'alejandro_nba@hotmail.com'],
            [ 'nombre' => 'Alejandro',                                  'correo' => 'zrv101893@gmail.com'],

        ]);
    }
}
