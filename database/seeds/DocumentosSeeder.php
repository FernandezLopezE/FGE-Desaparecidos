<?php

use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Documento::class,10)->create();
    }
}
