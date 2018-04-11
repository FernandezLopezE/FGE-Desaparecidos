<?php

use Illuminate\Database\Seeder;

class ParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_parentesco')->insert([
        	['nombre' => 'PADRE'],
        	['nombre' => 'MADRE'],
        	['nombre' => 'ESPOSO(A)'],
        	['nombre' => 'CONCUBINO(A)'],
        	['nombre' => 'AMANTE'],
        	['nombre' => 'HIJO(A)'],
        	['nombre' => 'TIO(A)'],
        	['nombre' => 'SOBRINO(A)'],
        	['nombre' => 'ABUELO(A)'],
        	['nombre' => 'NIETO(A)'],
        	['nombre' => 'SUEGRO(A)'],
        	['nombre' => 'CUÑADO(A)'],
        	['nombre' => 'AMISTAD'],
            ['nombre' => 'OTRO PARENTESCO']
        ]);
    }
}
