<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commercial;
use App\CommercialCompany;
use Faker\Generator as Faker;

$factory->define(Commercial::class, function (Faker $faker) {
    return [
      'price'=>$faker->randomFloat($nbMaxDecimals = null, $min = 0.1, $max = 999.99),
      'date' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now'),
      'commercial_company_id' => CommercialCompany::all()->random()->id,
      'commercial_for' => 'Sosyal medya',
      'created_at' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now')
    ];
});
