<?php

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->date(),
        'special_customer' => $faker->boolean(),
    ];
});
