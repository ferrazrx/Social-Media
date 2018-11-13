<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    $user = factory(App\User::class)->create()->id;
    return [
        'title'=> $faker->sentence(6),
        'content'=> $faker->paragraph(100),
        'url' => 'img/default.png',
        'created_by' => $user,
        'deleted_by' => null,
        'last_modified_by' => $user,
    ];
});