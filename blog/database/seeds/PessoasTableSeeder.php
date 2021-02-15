<?php

use Illuminate\Database\Seeder;
use App\Models\Pessoas;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pessoas::class, 100) ->create();
    }
}
