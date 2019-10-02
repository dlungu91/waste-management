<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'client_id' => $faker->numberBetween($min = 1, $max = 10),
        'amount' => $faker->numberBetween($min = 50, $max = 100),
        'duration' => $faker->numberBetween($min = 10, $max = 100),
        'datePaid' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'datedue' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tax' => $faker->numberBetween($min = 10, $max = 20)
    ];
});
