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
    $factory->define(App\Model\Order::class, function (Generator  $faker) {
        return [
        'total_amount' => rand(1,10),
        'total_quanity' => rand(1000,10000000),
        'shipper_on' => $faker->Name ,
        'status' => str_random(10),
        'comment' => $faker->text,
        'customer_id' => $customer_id->id,
        'payment_method'=> rand(0,5),
        'customer_birthday'=> $customer_id->birthday,
        'customer_code' => rand(10),
        'customer_name' => $customer_id->name,
        'customer_phone'=> $customer_id->phone,
        'customer_email'=> $customer_id->email,
        'receiver_name' => $faker->Name ,
        'receiver_phone' => rand(11),
        'receiver_email' =>$faker->unique()->safeEmail,
        'receiver_address' => $faker->text,
        'receiver_city' => rand(1,50),
        'receiver_provice' => rand(1,50),
        'receiver_tower' => rand(1,50),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
}