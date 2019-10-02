<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Complaint;
use Faker\Generator as Faker;

$factory->define(Complaint::class, function (Faker $faker) {
    return [
        'complaint' => $faker->paragraph,
        'client_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
        'date_made' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_due' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});
