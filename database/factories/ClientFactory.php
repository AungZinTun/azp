<?php

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "category_id" => factory('App\ProductCategory')->create(),
        "date" => $faker->date("Y-m-d", $max = 'now'),
        "phone" => $faker->name,
    ];
});
