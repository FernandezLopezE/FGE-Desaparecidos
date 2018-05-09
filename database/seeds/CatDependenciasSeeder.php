<?php

use Illuminate\Database\Seeder;

class CatDependenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_dependencias')->insert([
            [ 'nombre' => 'CENTRO ESTATAL DE ATENCION A VICTIMAS', 					'correo' => 'xbox.07@hotmail.com',                       'documento' => '1'],
            [ 'nombre' => 'POLICIA MINISTERIAL', 					              	'correo' => 'cavila@fiscaliaveracruz.gob.mx',            'documento' => '2'],
            [ 'nombre' => 'SERVICIOS PERICIALES', 			                           'correo' => 'esjimenez@fiscaliaveracruz.gob.mx',         'documento' => '3'],
            [ 'nombre' => 'IMMS', 								                       'correo' => 'dlanda@fiscaliaveracruz.gob.mx',             'documento' => '21'],
            [ 'nombre' => 'ISSSTE', 					                                  'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '21'],
            [ 'nombre' => ' ISSFAM', 					                                  'correo' => 'efernandezl@fiscaliavercruz.gob.mx',         'documento' => '21'],
            [ 'nombre' => 'SEGURO POPULAR', 				                            'correo' => 'bnicecd@gmail.com',                         'documento' => '21'],
            [ 'nombre' => 'UNIDAD DE ANALISIS DE INFORMACION',                          'correo' => 'alejandro.f.toledo@gmail.com',             'documento' => '4'],
            [ 'nombre' => 'COMISION NACIONAL BANCARIA Y DE VALORES',                        'correo' => 'PEGASO PCS',                 'documento' => '5'],
            [ 'nombre' => 'DELEGADO REGIONAL DE LA POLICIA MINISTERIAL',                  'correo' => 'zrv101893@gmail.com',                        'documento' => '6'],
            [ 'nombre' => 'DIRECCION GENERAL DE TRANSITO DEL ESTADO',                       'correo' => 'zrv101893@gmail.com',                        'documento' => '7'],
            [ 'nombre' => 'FISCALIA GENERAL DEL ESTADO',                                  'correo' => 'zrv101893@gmail.com',                        'documento' => '8'],
            [ 'nombre' => 'DIF MUNICIPAL',                                                   'correo' => 'zrv101893@gmail.com',                        'documento' => '9'],
            [ 'nombre' => 'PREVENCION Y REINSERCION SOCIAL',                                  'correo' => 'zrv101893@gmail.com',                        'documento' => '10'],
            [ 'nombre' => 'INSTITUTO NACIONAL DE MIGRACION EN EL ESTADO DE VERACRUZ',          'correo' => 'zrv101893@gmail.com',                        'documento' => '11'],
            [ 'nombre' => 'SEMEFO',                                                          'correo' => 'zrv101893@gmail.com',                        'documento' => '12'],
            [ 'nombre' => 'SEGURIDAD PUBLICA DEL ESTADO DE VERACRUZ',                     'correo' => 'zrv101893@gmail.com',                        'documento' => '13'],
            [ 'nombre' => 'SECRETARIA DE FINANZAS Y PLANEACION',                                 'correo' => 'zrv101893@gmail.com',                        'documento' => '14'],
            [ 'nombre' => 'SECRETARIA DE COMUNICACIONES Y TRANSPORTE ',                      'correo' => 'zrv101893@gmail.com',                        'documento' => '15'],
            [ 'nombre' => 'CENTRO ESTATAL DE CONTROL, COMANDO, COMUNICACIONES Y COMPUTO',      'correo' => 'zrv101893@gmail.com',                        'documento' => '16'],

        ]);
    }
}
