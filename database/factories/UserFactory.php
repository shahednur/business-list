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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Listing::class, function (Faker $faker) use($factory) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address'=>$faker->address,
        'website'=>$faker->domainName,
        'phone'=>$faker->phoneNumber,
        'bio'=>$faker->paragraph(1),
        'user_id'=>$factory->create(App\User::class)->id,
    ];
});
