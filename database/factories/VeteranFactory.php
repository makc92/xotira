<?php

use App\Models\Veteran;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Veteran::class, function (Faker $faker) {
    return [
        /*'thumbnail' => $faker->imageUrl('300','300', 'people'),*/
        "thumbnail" => "http://lorempixel.com/300/300/people/",
        'region' => 'tashkent'
    ];
});
