<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Advert::class, function (Faker $faker) {
    return [
        "thumbnail" => "",
        'user_id' => 1
    ];
});
