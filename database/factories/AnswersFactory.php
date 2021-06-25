<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        'question_id'=>factory(\App\Question::class)->create(),
        'answer'=>$faker->optional($weight = 0.1,$default = 'b')->randomLetter
    ];
});
