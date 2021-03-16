<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $factory->define(App\Model\Order::class, function (Generator  $faker) {
        return [
        'total_amount' => rand(1,10),
        'total_quanity' => rand(1000,10000000),
        'shipper_on' => $faker->Name ,
        'status' => rand(0,10),
        'comment' => $faker->text,
        'customer_id' => 1,
        'payment_method'=> rand(0,5),
        'customer_birthday'=> new DateTime,
        'customer_code' => rand(0,10),
        'customer_name' => $faker->Name,
        'customer_phone'=> rand(0,11),
        'customer_email'=> $faker->unique()->safeEmail,
        'receiver_name' => $faker->Name ,
        'receiver_phone' => rand(0,11),
        'receiver_email' =>$faker->unique()->safeEmail,
        'receiver_address' => $faker->text,
        'receiver_city' => rand(1,50),
        'receiver_provice' => rand(1,50),
        'receiver_tower' => rand(1,50),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
