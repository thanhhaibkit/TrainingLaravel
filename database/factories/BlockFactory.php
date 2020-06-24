<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Block;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Block::class, function (Faker $faker) {
    return [
        'code' => 'blck_' . Str::random(10),
        'name' => 'Block ' . $faker->buildingNumber
    ];
});
