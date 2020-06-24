<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Site;
use Faker\Generator as Faker;

$factory->define(Site::class, function (Faker $faker) {
    return [
        'code' => 'site_' . $faker->citySuffix,
        'name' => 'Site ' . $faker->state
    ];
});
