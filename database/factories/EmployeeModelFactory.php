<?php

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Employees\Employee;

$factory->define(Employee::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstName' => 'Dummy',
        'middleName' => 'Me',
        'lastName' => 'Admin',
        'role' => 'admin',
        'phone' => '09979814403',
        'username' => 'admin1236',
        'email' => 'admin018@gmail.com',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'status' => 1
    ];
});
