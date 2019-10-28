<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CommercialCompany;
use Faker\Generator as Faker;

$factory->define(CommercialCompany::class, function (Faker $faker) {
    return [
        'commercial_company'=>'Facebook'
    ];
});
