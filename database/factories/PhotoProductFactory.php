<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PhotoProduct;
use App\Photo;
use App\Product;
use Faker\Generator as Faker;

$factory->define(PhotoProduct::class, function (Faker $faker) {
    return [
        'photo_id'=>Photo::all()->random()->id,
        'product_id'=>Product::all()->random()->id
    ];
});
