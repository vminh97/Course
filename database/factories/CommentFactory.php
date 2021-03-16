<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;
  
    $factory->define(App\Model\Comments::class, function (Generator  $faker) {
        return [
        'goods_code' => 's'.str_random(5),
        'customer_id' =>1,
        'product_id' => 1,
        'customers_code' => '1s1',
        'customers_name' => $faker->name,
        'content_comment' =>$faker->text,
        'star_comment'=> rand(0,5),
        'comment_image'=> $faker->image,
        'status'=> rand(0,4),
        'isPublic' => rand(0,1),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
