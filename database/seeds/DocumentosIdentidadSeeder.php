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
            ['nombre' => 'NO ESPECIFICADO'],
            ['nombre' => 'ACTA DE NACIMIENTO'],
        	['nombre' => 'CREDENCIAL DE ELECTOR'],
        	['nombre' => 'CARTILLA DE SERVICIO MILITAR'],
        	['nombre' => 'LICENCIA DE CONDUCIR'],
        	['nombre' => 'TARJETON'],
        	['nombre' => 'CARTILLA DE VACUNACION'],
        	['nombre' => 'PASAPORTE'],
            ['nombre' => 'OTRO (ESPECIFIQUE)']
        ]);
    }
}
