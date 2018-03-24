<?php

use Illuminate\Database\Seeder;

class DomicilioDesaparecidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DomicilioDesaparecidosSeeder::class,10)->create();
    }
}
