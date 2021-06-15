<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    /*
    $availability = $faker->boolean;
    $count = 0;

    if ($availability) {
        $count = $faker->randomDigit();
    }
    */

    return [
        'title'         => $faker->unique()->sentence(3, false),
        'published_at'  => $faker->dateTime,
        'count'         => $faker->randomDigitNotZero(),
        'available'     => 1
    ];
});
