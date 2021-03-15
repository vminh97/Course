<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

    $records = [
        ['1', '2','3','4']
    ];
    for($i = 0; $i < count($records); $i++)
	{
    $user_id = DB::table('users')
			->where('id', '=', $records[$i][1])
			->select('id')->first();
    $category_id = DB::table('category')
            ->where('id', '=', $records[$i][1])
            ->select('id')->first();
    $factory->define(App\Model\News::class, function (Generator  $faker) {
        return [
        'title_news' => $faker->text,
        'description_news' => $faker->text,
        'content_news	' => $faker->text ,
        'user_id' => $user_id->id,
        'editer_by' => $user_id->name,
        'status' => $faker->text,
        'news_Date'=> new Datetime,
        'news_image' => $faker->image,
        'category_id' => $category_id->id,
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
}