<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $factory->define(App\Model\Hastang::class, function (Generator  $faker) {
        return [
        'hastang_code' =>'s'.str_random(5),
        'hastang_title' => $faker->text,
        'status' => $faker->text ,
        'start_date' =>  new Datetime,
        'end_date' => new Datetime,
        'isDisplay' => rand(0,1),
        'keyword'=> $faker->text,
        'description' => $faker->text,
        'show_order' => $faker->text,
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });