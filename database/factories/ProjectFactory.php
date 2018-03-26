<?php

use Faker\Generator as Faker;

$factory->define(\App\Project::class, function (Faker $faker) {
    $Name = $faker->words(rand(1,2), true);
    return [
        'name' => $Name,
        'slug' => str_slug($Name),
        'title' => $faker->words(rand(2,5), true),
        'description' => $faker->paragraphs(rand(2,5), true),
        'date' => $faker->date('Y-m-d','now'),
        'client' => $faker->company,
        'repository' => $faker->url,
        'link' => $faker->url,
    ];
});
