<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Website;
use Faker\Generator as Faker;

$factory->define(Website::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'url' => $faker->url,
        'timezone' => $faker->word,
        'best_time' => $faker->word,
        'url_time' => $faker->word,
        'best_day' => $faker->randomNumber(),
        'url_day' => $faker->word,
    ];
});
