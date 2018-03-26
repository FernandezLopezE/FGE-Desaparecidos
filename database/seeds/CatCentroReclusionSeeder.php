<?php

use Illuminate\Database\Seeder;
use App\Models\CentroReclusion;

class CatCentroReclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CentroReclusion::class, 10)->create();
        
    }
}
