<?php

use Illuminate\Database\Seeder;
use App\Models\CatPrenda;

class CatPrendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prendas= array(
            [ 'nombre' => 'CAMISA', 'idVestimenta' => '2', 'sexo' => 'H'],
            [ 'nombre' => 'PLAYERA', 'idVestimenta' => '2', 'sexo' => 'H'],
            [ 'nombre' => 'PANTALON', 'idVestimenta' => '2', 'sexo' => ''],
            [ 'nombre' => 'SUETER', 'idVestimenta' => '2', 'sexo' => ''],
            [ 'nombre' => 'CHALECO', 'idVestimenta' => '2', 'sexo' => ''],
            [ 'nombre' => 'CALCETINES', 'idVestimenta' => '2', 'sexo' => 'H'],
            [ 'nombre' => 'BLUSA', 'idVestimenta' => '2', 'sexo' => 'M'],
            [ 'nombre' => 'FALDA', 'idVestimenta' => '2', 'sexo' => 'M'],
            [ 'nombre' => 'VESTIDO', 'idVestimenta' => '2', 'sexo' => 'M'],
            [ 'nombre' => 'BOTAS', 'idVestimenta' => '3','sexo' => ''],
            [ 'nombre' => 'SANDALIA', 'idVestimenta' => '3','sexo' => ''],
            [ 'nombre' => 'BOTINES', 'idVestimenta' => '3','sexo' => ''],
            [ 'nombre' => 'MOCASINES', 'idVestimenta' => '3','sexo' => ''],
            [ 'nombre' => 'SLIPPERS', 'idVestimenta' => '3','sexo' => ''],
            [ 'nombre' => 'TENIS', 'idVestimenta' => '3','sexo' => ''],
            [ 'nombre' => 'ANTEOJOS', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'BASTÓN', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'ANILLOS', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'MEDALLAS', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'CREDENCIALES', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'CINTURÓN', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'RELOJ', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'COLLARES', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'PULSERAS', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'CELULAR', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'SOMBRERO', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'BOLSA', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'CADENAS', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'CARTERA', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'TARJETA DE CRÉDITO/DÉBITO', 'idVestimenta' => '4','sexo' => ''],
            [ 'nombre' => 'OTRO', 'idVestimenta' => '4','sexo' => '']
        );

        foreach ($prendas as $prenda) {
            CatPrenda::create($prenda);
        }
    }
}
