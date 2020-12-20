<?php

use App\Models\Photo;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Photo::class, function (Faker $faker) {
    return [
        'thumbnail' => ''
    ];
});
