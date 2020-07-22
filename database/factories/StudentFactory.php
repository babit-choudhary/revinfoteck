<?php

use Faker\Generator;
use Ramsey\Uuid\Uuid;
use App\Models\Student;
use Illuminate\Support\Str;

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

$factory->define(Student::class, function (Generator $faker) {
    return [
        'name' => $faker->name(),
        'father_name' => $faker->name($gender ='male'),
        'mother_name' => $faker->name($gender ='female'),
        'roll_no' => $faker->unique()->randomNumber($nbDigits = 6),
        'class' => $faker->randomElement($array = array ('BCA','MCA','B.Sc.','M.Sc','B.Tech')),
        'address' => $faker->address,
        'dob'=>"1995-11-06",
        'phone_no'=> rand(1111111111,9999999999),
        'profile_pic' => $faker->imageUrl($width = 200, $height = 200)
      
    ];
});
