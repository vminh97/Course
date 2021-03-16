<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Model\Customer;

    $factory->define(Customer::class, function (Generator  $faker) {
        return [
                'customer_name' => $faker->Name,
                'image_customer' => $faker->Name,
                'birthday' => new Datetime,
                'address' => $faker->Name,
                'email' =>$faker->unique()->safeEmail,
                'isactive' =>rand(0,1),
                'status'=> rand(0,4),
                'first_name'=>$faker->name,
                'last_name'=>$faker->name,
                'phone'=> rand(4,11),
                'created_at'=> new Datetime,
                'updated_at'=> new Datetime,
        ];
    });