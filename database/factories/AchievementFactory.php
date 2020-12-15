<?php

use App\Models\Achievement;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Achievement::class, function (Faker $faker) {
    return [
        "thumbnail" => "http://lorempixel.com/300/300/people/",
        "user_id" => 1,
    ];
});
