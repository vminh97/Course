<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $factory->define(App\Model\Category::class, function (Generator  $faker) {
        return [
        'order_number' => rand(0,100),
        'Name' => $faker->Name,
        'name_Display' => $faker->Name,
        'is_Display' =>  rand(0,1),
        'slug_url' => $faker->Name,
        'category_status' => str_random(10),
        'parent_id'=> rand(0,10),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });