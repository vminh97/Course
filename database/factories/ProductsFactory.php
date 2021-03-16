<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

        $factory->define(App\Model\Course::class, function (Generator  $faker) {
            return [
            'goods_code' => 's'.str_random(5),
            'slug_url' => $faker->Name,
            'name_product' => $faker->Name ,
            'teacher_id' => 1,
            'introduction_product' => $faker->text,
            'content_product' => $faker->text,
            'title_procduct'=> $faker->text,
            'category_id' => 1,
            'certificate_id' => 1,
            'name_brand' => $faker->name,
            'price' => rand(10000,100000000),
            'price_no_tax'=> rand(10000,100000000),
            'price_offsale' =>  rand(10000,100000000),
            'price_offsale_no_tax' => rand(10000,100000000),
            'product_image' => $faker->image,
            'product_image_text' => $faker->text,
            'video'=> $faker->text,
            'material_name'=> $faker->text,
            'hashtag_name' => $faker->text,
            'search_keywords' => $faker->text,
            'list_image' => $faker->text,
            'isPublic' => rand(0,1),
            'isRefund' => rand(0,1),
            'isCertification' => rand(0,1),
            'isOnlinePayment' => rand(0,1),
            'isRate' => rand(0,1),
            'isFreeShip' => rand(0,1),
            'timeRefund' => new Datetime,
            'count_video' => rand(0,100),
            'sum_time_video' =>rand(60,10000000),
            'date_start' => new Datetime,
            'date_end' => new Datetime,
            'count_discount' => rand(0,90),
            'activation code' => str_random(15),
            'date_promotion_start'=> new Datetime,
            'date_promotion_end'=> new Datetime,
            'status' => str_random(15),
            'created_at'=> new Datetime,
            'updated_at'=> new Datetime,
            ];
        });
    