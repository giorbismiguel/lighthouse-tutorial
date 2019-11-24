<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'author' => $faker->name,
        'image' => $faker->imageUrl,
        'description' => $faker->paragraph,
        'link' => $faker->url,
        'featured' => $faker->boolean,
        'category_id' => mt_rand(1, 6),
        'created_at' => today(),
    ];
});
