<?php

use Illuminate\Database\Seeder;

class DocumentosIdentidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_documento_identidad')->insert([
        	['nombre' => 'CREDENCIAL DE ELECTOR'],
        	['nombre' => 'CARTILLA DE SERVICIO MILITAR'],
        	['nombre' => 'LICENCIA DE CONDUCIR'],
        	['nombre' => 'TARJETON'],
        	['nombre' => 'CARTILLA DE VACUNACION'],
        	['nombre' => 'PASAPORTE'],
            ['nombre' => 'ACTA DE NACIMIENTO'],
            ['nombre' => 'OTRO (ESPECIFIQUE)']
        ]);
    }
}
