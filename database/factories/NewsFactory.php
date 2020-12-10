<?php

use App\Models\News;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(News::class, function (Faker $faker) {
    return [
        "thumbnail" => "http://lorempixel.com/300/300/people/",
        'user_id' => 1
    ];
});
