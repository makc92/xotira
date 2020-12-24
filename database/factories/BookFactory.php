<?php

use App\Models\Book;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'thumbnail' => '',
        'book' => $faker->word,
        'description' =>  [
            "uz"=> $faker->text,
            "oz"=> $faker->text,
            "ru"=> $faker->text,
            "en"=> $faker->text,
        ],
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
