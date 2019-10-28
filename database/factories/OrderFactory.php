<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\City;
use App\Status;
use App\PaymentMethod;
use App\ShippingCompany;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
      'name_surname'=> $faker->name ,
      'phone_number'=> $faker->e164PhoneNumber,
      'address'=> $faker->address,
      'city_id'=> City::all()->random()->id,
      'status_id'=> Status::all()->random()->id,
      'price'=> '60',
      'payment_method_id'=> PaymentMethod::all()->random()->id,
      'Note'=> 'TEST VERİSİDİR',
      'control_allowed'=> $faker->boolean,
      'payment_on_door'=> $faker->boolean,
      'shipping_company_id'=> ShippingCompany::all()->random()->id,
      'user_id'=> User::all()->random()->id,
      'track_code'=> $faker->url
    ];
});
