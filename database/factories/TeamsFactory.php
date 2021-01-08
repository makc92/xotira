<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Team::class, function (Faker $faker) {
    return [
       'thumbnail' => '',
        'order' => 0
    ];
});
