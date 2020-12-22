<?php

use App\Models\Application;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Application::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        /*'address' => $faker->address,*/
        'message' => $faker->realText(100,2),
        'photo' => null,
        'document' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
