<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\User;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'user_id' => User::all()->random()->id
    ];
});