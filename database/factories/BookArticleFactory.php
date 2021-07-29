<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookArticle;
use Faker\Generator as Faker;

$factory->define(BookArticle::class, function (Faker $faker) {
    return [
        'serial_number' => $faker->unique()->ean13,
        'language'      => $faker->randomElement(
            array('en', 'fr', 'de')
        ),
    ];
});
