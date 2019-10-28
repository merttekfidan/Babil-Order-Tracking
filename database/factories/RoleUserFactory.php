<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoleUser;
use App\Role;
use App\User;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'role_id'=>Role::all()->random()->id,
        'user_id'=>User::all()->random()->id
    ];
});
