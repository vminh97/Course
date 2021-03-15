<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;
  
$records = [
    ['1', '2','3','4']
];
for($i = 0; $i < count($records); $i++)
	{
    $order_id = DB::table('orders')
        ->where('id', '=', $records[$i][1])
        ->select('id')->first();
    $product_id = DB::table('products')
        ->where('id', '=', $records[$i][1])
        ->select('id')->first();
    $factory->define(App\Model\Order_detail::class, function (Generator  $faker) {
        return [
        'order_id' => $order_id->id,
        'ordercode' => 'o'.str_random(5),
        'product_id' => $product_id->id,
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
}