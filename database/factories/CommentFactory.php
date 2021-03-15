<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;

$records = [
    ['1', '2','3','4']
];
for($i = 0; $i < count($records); $i++)
	{
    $customer_id = DB::table('customers')
			->where('id', '=', $records[$i][1])
			->select('id')->first();
    $product_id  = DB::table('products')
            ->where('id', '=', $records[$i][1])
            ->select('id')->first();      
    $factory->define(App\Model\Comment::class, function (Generator  $faker) {
        return [
        'goods_code' => 's'.str_random(5),
        'customer_id' => $customer_id->id,
        'product_id' => $product_id->id,
        'customers_code' =>  $customer_id->id.'s'.$product_id->id,
        'customers_name' => $customer_id->customer_name,
        'content_comment' =>$faker->text,
        'star_comment'=> rand(0,5),
        'comment_image'=> $faker->image,
        'status'=> $faker->Text,
        'isPublic' => rand(0,1),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
}