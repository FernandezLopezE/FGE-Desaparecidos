<?php

use Illuminate\Database\Seeder;
use App\Parentesco;

class ParentescoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Parentesco::class,10)->create();
    }
}
