<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Module::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->word,
        'name' => $faker->name,
        'description' => $faker->text(100),
    ];
});
