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

$factory->define(App\Data\Models\CatererService::class, function (Faker $faker) {
    return [
        'caterer_id' => 1,
        'title' => $faker->realText(75),
        'description' => $faker->realText(150),
        'status' => ['0', '1'][rand(0 ,1)],
    ];
});

$factory->define(App\Data\Models\CatererServiceLead::class, function (Faker $faker) {
    return [
        'inquirer_id' => 0,
        'caterer_service_id' => 0,
        'inquirer_name' => $faker->name,
        'inquirer_email' => $faker->email,
        'inquirer_number' => $faker->phoneNumber,
        'title' => $faker->realText(75),
        'content' => $faker->realText(150),
    ];
});

$factory->define(App\Data\Models\CustomerJob::class, function (Faker $faker) {
    return [
    	'customer_id' => 0,
        'title' => $faker->realText(75),
        'description' => $faker->realText(150),
        'status' => ['0', '1'][rand(0 ,1)],
    ];
});

$factory->define(App\Data\Models\CustomerJobApplication::class, function (Faker $faker) {
    return [
    	'caterer_id' => 0,
        'customer_job_id' => 0,
        'proposal' => $faker->realText(150),
    ];
});

$factory->define(App\Data\Models\SaveContent::class, function (Faker $faker) {
    return [
    	'user_id' => 0,
        'content_type' => [
        	App\Data\Models\CatererService::class, 
        	App\Data\Models\CustomerJob::class
        ][rand(0, 1)],
        'content_id' => 0,
    ];
});

$factory->define(App\Data\Models\UserReview::class, function (Faker $faker) {
    return [
    	'title' => 0,
    	'rate' => 0,
    	'content' => 0,
    	'by_user_id' => 0,
    	'for_user_id' => 0,
        'for_content_type' => [
        	App\Data\Models\CatererService::class, 
        	App\Data\Models\CustomerJob::class
        ][rand(0, 1)],
        'for_content_id' => 0,
        'status' => ['0', '1'][rand(0 ,1)]
    ];
});

