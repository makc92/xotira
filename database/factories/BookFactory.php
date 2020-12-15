<?php

use App\Models\Book;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'thumbnail' => $faker->word,
        'book' => $faker->word,
        'description' =>  [
            "uz"=> "UZ ". $faker->text,
            "oz"=> "OZ ". $faker->text,
            "ru"=> "RU ". $faker->text,
            "en"=> "EN ". $faker->text,
        ],
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
