<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;
use App\Http\Controllers\Api\ProductController;
use App\Product;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 0 , 8),
        'description' => $faker->text
    ];
});
