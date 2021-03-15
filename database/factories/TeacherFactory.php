<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;
$records = [
    ['1', '2','3','4']
];
for($i = 0; $i < count($records); $i++)
	{
    $factory->define(App\Model\Customer::class, function (Generator  $faker) {
        return [
        'customer_name' => $faker->Name,
        'image_customer' =>$faker->image,
        'birthday' => new Datetime,
        'address' => $faker->Text,
        'email' => $faker->unique()->safeEmail,
        'isactive' =>str_random(10),
        'status'=> $faker->Text,
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'phone'=> rand(1,11),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
}