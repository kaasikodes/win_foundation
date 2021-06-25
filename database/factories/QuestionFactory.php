<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'question'=>$faker->sentence(7),
        'option_a'=>$faker->word,
        'option_b'=>$faker->word,
        'option_c'=>$faker->word,
        'option_d'=>$faker->word,
        'correct_answer'=>$faker->optional($weight = 0.1, $default = 'b')->randomLetter


    ];
});
