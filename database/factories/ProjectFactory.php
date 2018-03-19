<?php

use Faker\Generator as Faker;

$factory->define(\App\Project::class, function (Faker $faker) {
    $title = $faker->words(rand(4,7), true);
    $years = [2016, 2017, 2018];
    return [
        'date' => $years[rand(0,2)],
        'client' => $faker->company,
        'repository' => $faker->url,
        'link' => $faker->url,
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->paragraphs(rand(1,3), true),
        'image_id' => 1,
    ];
});
