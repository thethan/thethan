<?php


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Post::class, function($faker){
    $images = ['about-bg.jpg','contact-bg.jpg'];
    $title = $faker->sentence(mt_rand(3,10));
    return [
        'title' => $title,
        'subtitle' => str_limit($faker->sentence(mt_rand(10,25)),252),
        'page_image' => $images[mt_rand(0,1)],
        'content_raw' => join("\n\n", $faker->paragraphs(mt_rand(3,6))),
        'published_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'meta_description' => "Meta for $title",
        'category_id' => mt_rand(1,4),
        'is_draft' => false
    ];
});

$factory->define(App\Tag::class, function($faker){
    $images = ['about-bg.jpg','contact-bg.jpg'];
    $word = $faker->word;
    return [
        'tag' => $word,
        'title' => ucfirst($word),
        'subtitle' => $faker->sentence,
        'page_image' =>  $images[mt_rand(0,1)],
        'meta_description' => "Meta for $word",
        'reverse_direction' => false
    ];
});


$factory->define(App\Category::class, function($faker){
    $images = ['about-bg.jpg'];
    $word = $faker->word;
    return [
        'category' => str_random(10),
        'title' => ucfirst($word),
        'subtitle' => $faker->sentence,
        'page_image' =>  $images[0],
        'meta_description' => "Meta for $word",
        'reverse_direction' => false
    ];
});