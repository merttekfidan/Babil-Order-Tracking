<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(255),
        'description'=>$faker->text(500),
        'code'=>$faker->text(6)
    ];
});
