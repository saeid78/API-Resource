<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'first_Name' => $faker->firstName('male'),
        'last_Name' => $faker->lastName,
        'age' => rand(20,80),
        'city' => $faker->city,



        //
    ];
});
