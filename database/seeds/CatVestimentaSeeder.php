<?php

use Illuminate\Database\Seeder;
use App\Models\CatVestimenta;

class CatVestimentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vestimentas= array(
            [ 'nombre' => 'SIN INFORMACIÓN'],
            [ 'nombre' => 'PRENDA'],
            [ 'nombre' => 'CALZADO'],
            [ 'nombre' => 'ACCESORIOS'],
            [ 'nombre' => 'OBJETOS'],          
        );

        foreach ($vestimentas as $vestimenta) {
            CatVestimenta::create($vestimenta);
        }

    }
}
