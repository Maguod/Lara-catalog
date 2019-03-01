<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'is_admin' => 1,
    ];
});
$factory->define(App\Card::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2, true),
        'content' => $faker->text(400),
        'slug' => $faker->slug(2),
        'category_id' => 2,
        'image' => $faker->image('upload', 400, 400, '', false),
    ];
});
$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2, true),
        'description' => $faker->text(300),
        'slug' => $faker->slug(2),
//        'user_id' => 1
    ];
});
