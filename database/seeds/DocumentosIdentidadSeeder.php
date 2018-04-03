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
        	['nombre' => 'Credencial de elector'],
        	['nombre' => 'Cartilla de servicio militar'],
        	['nombre' => 'Licencia de conducir'],
        	['nombre' => 'Tarjetón'],
        	['nombre' => 'Cartilla de vacunación'],
        	['nombre' => 'Pasaporte'],
            ['nombre' => 'Otro (especifique)']
        ]);
    }
}
