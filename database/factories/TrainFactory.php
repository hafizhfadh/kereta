<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Train::class, function (Faker $faker) {
    return [
        'train_name' => 'Kereta '.$faker->firstName,
    ];
});
