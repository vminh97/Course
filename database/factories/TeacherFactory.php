<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $factory->define(App\Model\Teacher::class, function (Generator  $faker) {
        return [
        'customer_name' => $faker->Name,
        'gender' => rand(0,1),
        'password' => str_random(15),
        'image_teacher' =>$faker->image,
        'birthday' => date("Y-m-d"),
        'address' => $faker->Text,
        'email' => $faker->unique()->safeEmail,
        'isactive' =>rand(0,1),
        'status'=> rand(0,4),
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'phone'=> rand(1,11),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
