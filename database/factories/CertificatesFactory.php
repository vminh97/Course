<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $factory->define(App\Model\Certificates::class, function (Generator  $faker) {
        return [
        'name_certificate' =>  $faker->Name,
        'type_certificate' => rand(0,2),
        'title_certificate' => $faker->Name ,
        'content_certificate' => $faker->Name ,
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });