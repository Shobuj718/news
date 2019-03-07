<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Ehsan News',
        'role_id' => 1,
        'email' => 'shobuj@gmail.com',
        'mobile'=>'01926287401',
        'address'=>null,
        'email_verified_at' => now(),
        'password' => bcrypt('12345678'),
        'photo'  => 'http://localhost/news/public/BackEnd/img/ehsan_soft_logo.PNG',
        'status' =>1,
        'remember_token' => Str::random(10),
    ];
});
