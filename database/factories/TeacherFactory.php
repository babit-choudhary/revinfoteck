<?php

use App\Models\Teacher;
use Faker\Generator;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

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

$factory->define(Teacher::class, function (Generator $faker) {
    return [
        'name' => $faker->firstName.' '.$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->randomElement($array = array ('Math','English','Chemistry','Python','OS','Data Structure')),
        'qualification' => $faker->randomElement($array = array ('BCA','MCA','B.Sc.','M.Sc','B.Tech')),
        'address' => $faker->address,
        'dob'=>"1995-11-06",
        'phone_no'=> rand(1111111111,9999999999),
        'profile_pic' => $faker->imageUrl($width = 200, $height = 200)
      
    ];
});
