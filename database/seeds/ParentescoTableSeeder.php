<?php

use Illuminate\Database\Seeder;
use App\Models\Parentesco;

class ParentescoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Parentesco::class,10)->create();
    }
}
