<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'client_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
        'collection_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
        'request' => $faker->paragraph,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
        'date_made' => $faker->date($format = 'y-m-d', $max = 'now'),
        'date_due' => $faker->date($format = 'y-m-d', $max = 'now')
    ];
});
