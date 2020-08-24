<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserProject;
use Faker\Generator as Faker;

$factory->define(UserProject::class, function (Faker $faker) {
    $username = [
        'Tim',
        'Jhon',
        'Michael',
        'James',
        'Robert',
        'William',
        'David',
        'Thomas',
        'Christopher',
        'Matthew',
        'Donald',
        'Andrew',
        'Edward',
        'Jason',
    ];

    $projects = ['Youtube', 'Google Play', 'Vuejs', 'Twitter', 'MySQL Package', 'JSAlbum', 'Website'];

    return [
        'username' => $faker->randomElement($username),
        'project' => $faker->randomElement($projects),
        'date' => $faker->dateTimeBetween('-6 months', 'now'),
        'time' => rand(1, 8),
    ];
});
