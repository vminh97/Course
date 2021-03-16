<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $factory->define(App\Model\News::class, function (Generator  $faker) {
        return [
        'title_news' => $faker->text,
        'description_news' => $faker->text,
        'content_news	' => $faker->text ,
        'user_id' => 1,
        'editer_by' => 'Zackary Smith',
        'status' => rand(0,3),
        'news_Date'=> new Datetime,
        'news_image' => $faker->image,
        'category_id' => $category_id->id,
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
