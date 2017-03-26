<?php

use Faker\Generator;
use App\Models\Access\Role\Role;
use App\Models\Access\User\User;

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

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'              => $faker->name,
        'email'             => $faker->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
        'confirmation_code' => md5(uniqid(mt_rand(), true)),
    ];
});

$factory->define(App\District::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company
    ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'district_id' => "1"
    ];
});

$factory->define(App\Staff::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'grade' => "".rand(1,12)."",
        'school_id' => "".rand(1,15).""
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'grade' => "".rand(1,12)."",
        'school_id' => "".rand(1,15)."",
        'student_id_num' => "".rand(100, 999).""
    ];
});

$factory->define(App\Person::class, function (Faker\Generator $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'name' => $faker->firstName,
        'student_id' => rand(1,1000),
        'student_num' => $faker->uuid
    ];
});

$factory->state(User::class, 'active', function () {
    return [
        'status' => 1,
    ];
});

$factory->state(User::class, 'inactive', function () {
    return [
        'status' => 0,
    ];
});

$factory->state(User::class, 'confirmed', function () {
    return [
        'confirmed' => 1,
    ];
});

$factory->state(User::class, 'unconfirmed', function () {
    return [
        'confirmed' => 0,
    ];
});

/*
 * Roles
 */
$factory->define(Role::class, function (Generator $faker) {
    return [
        'name' => $faker->name,
        'all'  => 0,
        'sort' => $faker->numberBetween(1, 100),
    ];
});

$factory->state(Role::class, 'admin', function () {
    return [
        'all' => 1,
    ];
});
