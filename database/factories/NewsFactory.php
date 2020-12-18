<?php

use App\Models\News;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(News::class, function (Faker $faker) {
    return [
        "thumbnail" => "",
        'user_id' => 1
    ];
});
