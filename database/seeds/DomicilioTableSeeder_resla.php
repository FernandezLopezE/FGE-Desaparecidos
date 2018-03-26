<?php

use Illuminate\Database\Seeder;

class DomicilioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Domicilio::class,10)->create();
    }
}
