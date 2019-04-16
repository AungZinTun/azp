<?php

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        "album_id" => factory('App\Album')->create(),
    ];
});
