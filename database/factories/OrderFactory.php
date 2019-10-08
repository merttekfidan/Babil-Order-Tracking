<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\City;
use App\Status;
use App\PaymentMethod;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'name'=> $faker->firstName,
        'surname'=> $faker->lastName,
        'phone_number'=> $faker->e164PhoneNumber,
        'address'=> $faker->address,
        'cities_id'=> City::all()->random()->id,
        'product_code'=> 'BABİL-'.$faker->randomDigit,
        'price'=> '60',
        'statuses_id'=> Status::all()->random()->id,
        'Note'=> 'TEST VERİSİDİR',
        'payment_methods_id'=> PaymentMethod::all()->random()->id,
        'control_allowed'=> $faker->boolean,
        'payment_on_door'=> $faker->boolean
    ];
});
