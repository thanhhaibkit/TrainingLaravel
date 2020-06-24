<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Building;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Building::class, function (Faker $faker) {
    return [
        'code' => 'bldg_' . Str::random(10),
        'name' => 'Building ' . $faker->buildingNumber
    ];
});
