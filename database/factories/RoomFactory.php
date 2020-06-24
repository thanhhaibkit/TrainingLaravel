<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Room;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'code' => 'room_' . Str::random(10),
        'name' => 'Room ' . $faker->name
    ];
});
