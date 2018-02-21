<?php

use Faker\Generator as Faker;

$rand = ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'D'];
$index = array_rand($rand);

$stat = ['1' => 'Available', '2' => 'Unavailable'];
$ind = array_rand($rand);

$id = App\Models\Wagon::all();

$factory->define(App\Models\Chair::class, function (Faker $faker) {
    return [
        'row' => rand(1, 52),
        'column' => $rand[$index],
        'status' => $stat[$ind],
        'wagon_id' => $id->id,
    ];
});
