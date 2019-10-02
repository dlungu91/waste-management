<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collections;
use Faker\Generator as Faker;

$factory->define(Collections::class, function (Faker $faker) {
    return [
        'date_collected' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'comment' => $faker->paragraph,
        'client_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
        'payment_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
        'collector_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
    ];
});
