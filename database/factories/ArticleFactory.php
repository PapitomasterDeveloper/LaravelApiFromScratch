<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

// Specify the Model to be use, delete the Model object and indicate via namespace the model to use and populate with fake data
$factory->define(App\Article::class, function (Faker $faker) {
    return [
      // Help us to model the fake data
            'title' => $faker->text(50),
            'body' => $faker->text(200)
    ];
});
