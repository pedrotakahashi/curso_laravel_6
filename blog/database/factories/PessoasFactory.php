<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pessoas;
use Faker\Generator as Faker;

$factory->define(Pessoas::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'age' =>$faker->sentence(),
        
        ];
});
