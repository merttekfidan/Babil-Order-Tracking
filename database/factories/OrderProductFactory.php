<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderProduct;
use App\Product;
use App\Order;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'order_id'=>Order::all()->random()->id,
        'product_id'=>Product::all()->random()->id
    ];
});
