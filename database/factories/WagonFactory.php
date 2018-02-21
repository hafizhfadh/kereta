<?php

use Faker\Generator as Faker;

$rand = ['1' => 'Executive','2' => 'Busines','3' => 'Economy'];
$index = array_rand($rand);
$id = App\Models\Train::all();

$factory->define(App\Models\Wagon::class, function (Faker $faker) {
    return [
        'class' => $rand[$index],
        'price' => rand(100000, 500000),
        'train_id' => $id->id,
    ];
});
