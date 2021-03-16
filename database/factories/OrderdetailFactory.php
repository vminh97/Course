<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;
  
    $factory->define(App\Model\Order_detail::class, function (Generator  $faker) {
        return [
        'order_id' => 1,
        'ordercode' => 'o'.str_random(5),
        'product_id' => 1,
        'goods_code' =>  'or'.str_random(5),
        'quantity' => rand(0,100),
        'sale_price' => rand(5,90),
        'product_image'=> $faker->image,
        'isCancer' => rand(0,1),
        'product_price' =>rand(10000,10000000),
        'product_price_sale'=> rand(10000,10000000),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
