<?php

use Faker\Generator as Faker;

$factory->define(\App\Services\Other\Models\Link::class, function (Faker $faker) {
    return [
        'sort' => $faker->numberBetween(0, 100),
        'name' => $faker->name,
        'url' => $faker->url,
    ];
});
