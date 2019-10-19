<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commercial;
use Faker\Generator as Faker;

$factory->define(Commercial::class, function (Faker $faker) {
    return [
        'name'=>'Facebook',
        'price'=>$faker->randomFloat($nbMaxDecimals = null, $min = 0.1, $max = 99999.99),
        'date' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now'),
        'created_at' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now')
    ];
});
