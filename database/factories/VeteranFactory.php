<?php

use App\Models\Veteran;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Veteran::class, function (Faker $faker) {
    return [
        /*'thumbnail' => $faker->imageUrl('300','300', 'people'),*/
        "thumbnail" => "",
        'region_id' => $faker->numberBetween($min = 1, $max = 14)
        /*'region_id' => 1*/
    ];
});
