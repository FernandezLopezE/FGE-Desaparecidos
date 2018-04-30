<?php

use Illuminate\Database\Seeder;

class CatDienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_dientes')->insert([
            [ 'id' => 1, 'numDiente' => 11, 'nombreDiente' => 'INCISIVO CENTRAL SUPERIOR DERECHO'],
            [ 'id' => 2, 'numDiente' => 12, 'nombreDiente' => 'INCISIVO LATERAL SUPERIOR DERECHO'],
            [ 'id' => 3, 'numDiente' => 13, 'nombreDiente' => 'CANINO SUPERIOR DERECHA'],
            [ 'id' => 4, 'numDiente' => 14, 'nombreDiente' => 'PRIMER PREMOLAR SUPERIOR DERECHO'],
            [ 'id' => 5, 'numDiente' => 15, 'nombreDiente' => 'SEGUNDO PREMOLAR SUPERIOR DERECHO'],
            [ 'id' => 6, 'numDiente' => 16, 'nombreDiente' => 'PRIMER MOLAR SUPERIOR DERECHO'],
            [ 'id' => 7, 'numDiente' => 17, 'nombreDiente' => 'SEGUNDO MOLAR SUPERIOR DERECHO'],
            [ 'id' => 8, 'numDiente' => 18, 'nombreDiente' => 'TERCER MOLAR SUPERIOR DERECHO'],
            [ 'id' => 9, 'numDiente' => 21, 'nombreDiente' => 'INCISIVO CENTRAL SUPERIOR IZQUIERDO'],
            [ 'id' => 10, 'numDiente' => 22, 'nombreDiente' => 'INCISIVO LATERAL SUPERIOR IZQUIERDO'],
            [ 'id' => 11, 'numDiente' => 23, 'nombreDiente' => 'CANINO SUPERIOR IZQUIERDA'],
            [ 'id' => 12, 'numDiente' => 24, 'nombreDiente' => 'PRIMER PREMOLAR SUPERIOR IZQUIERDO'],
            [ 'id' => 13, 'numDiente' => 25, 'nombreDiente' => 'SEGUNDO PREMOLAR SUPERIOR IZQUIERDO'],
            [ 'id' => 14, 'numDiente' => 26, 'nombreDiente' => 'PRIMER MOLAR SUPERIOR IZQUIERDO'],
            [ 'id' => 15, 'numDiente' => 27, 'nombreDiente' => 'SEGUNDO MOLAR SUPERIOR IZQUIERDO'],
            [ 'id' => 16, 'numDiente' => 28, 'nombreDiente' => 'TERCER MOLAR SUPERIOR IZQUIERDA'],
            [ 'id' => 17, 'numDiente' => 31, 'nombreDiente' => 'INCISIVO CENTRAL INFERIOR IZQUIERDO'],
            [ 'id' => 18, 'numDiente' => 32, 'nombreDiente' => 'INCISIVO LATERAL INFERIOR IZQUIERDO'],
            [ 'id' => 19, 'numDiente' => 33, 'nombreDiente' => 'CANINO INFERIOR IZQUIERDA'],
            [ 'id' => 20, 'numDiente' => 34, 'nombreDiente' => 'PRIMER PREMOLAR INFERIOR IZQUIERDO'],
            [ 'id' => 21, 'numDiente' => 35, 'nombreDiente' => 'SEGUNDO PREMOLAR INFERIOR IZQUIERDO'],
            [ 'id' => 22, 'numDiente' => 36, 'nombreDiente' => 'PRIMER MOLAR INFERIOR IZQUIERDO'],
            [ 'id' => 23, 'numDiente' => 37, 'nombreDiente' => 'SEGUNDO MOLAR INFERIOR IZQUIERDO'],
            [ 'id' => 24, 'numDiente' => 38, 'nombreDiente' => 'TERCER MOLAR INFERIOR IZQUIERDA'],
            [ 'id' => 25, 'numDiente' => 41, 'nombreDiente' => 'INCISIVO CENTRAL INFERIOR DERECHO'],
            [ 'id' => 26, 'numDiente' => 42, 'nombreDiente' => 'INCISIVO LATERAL INFERIOR DERECHO'],
            [ 'id' => 27, 'numDiente' => 43, 'nombreDiente' => 'CANINO INFERIOR DERECHA'],
            [ 'id' => 28, 'numDiente' => 44, 'nombreDiente' => 'PRIMER PREMOLAR INFERIOR DERECHO'],
            [ 'id' => 29, 'numDiente' => 45, 'nombreDiente' => 'SEGUNDO PREMOLAR INFERIOR DERECHO'],
            [ 'id' => 30, 'numDiente' => 46, 'nombreDiente' => 'PRIMER MOLAR INFERIOR DERECHA'],
            [ 'id' => 31, 'numDiente' => 47, 'nombreDiente' => 'SEGUNDO MOLAR INFERIOR DERECHA'],
            [ 'id' => 32, 'numDiente' => 48, 'nombreDiente' => 'TERCER MOLAR INFERIOR DERECHA'],
        ]);
    }
}
