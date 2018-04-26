<?php

use Illuminate\Database\Seeder;

class CatSenasParticularesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_senas_particulares')->insert([
        	[ 'id' => 1, 'nombre' => 'SIN INFORMACIÓN'],
            [ 'id' => 2, 'nombre' => 'CICATRIZ QUIRÚRGICA'],
            [ 'id' => 3, 'nombre' => 'CICATRIZ TRAUMÁTICA'],
            [ 'id' => 4, 'nombre' => 'HERIDA DE CICATRIZACIÓN'],
            [ 'id' => 5, 'nombre' => 'QUEMADURA'],
            [ 'id' => 6, 'nombre' => 'AMPUTACIONES'],
            [ 'id' => 7, 'nombre' => 'DEFORMACIONES'],
            [ 'id' => 8, 'nombre' => 'ACORTAMIENTO DE PIERNA'],
            [ 'id' => 9, 'nombre' => 'ACORTAMIENTO DE BRAZO'],
            [ 'id' => 10, 'nombre' => 'CALLOSIDADES'],
            [ 'id' => 11, 'nombre' => 'LUNARES'],
            [ 'id' => 12, 'nombre' => 'PECAS'],
            [ 'id' => 13, 'nombre' => 'NEVO'],
            [ 'id' => 14, 'nombre' => 'VERRUGA'],
            [ 'id' => 15, 'nombre' => 'MANCHAS'],
            [ 'id' => 16, 'nombre' => 'VELLO CORPORAL'],
            [ 'id' => 17, 'nombre' => 'ESTRÍAS'],
            [ 'id' => 18, 'nombre' => 'UÑAS MORDIDAS'],
            [ 'id' => 19, 'nombre' => 'UÑAS ENCARGADAS'],
            [ 'id' => 20, 'nombre' => 'UÑAS LARGAS'],
            [ 'id' => 21, 'nombre' => 'UÑAS PINTADAS'],
            [ 'id' => 22, 'nombre' => 'UÑAS POSTIZAS'],
            [ 'id' => 23, 'nombre' => 'AUSENCIA DE UÑAS'],
            [ 'id' => 24, 'nombre' => 'TATUAJES'],
            [ 'id' => 25, 'nombre' => 'OTRO'],
        	]);
    }
}
