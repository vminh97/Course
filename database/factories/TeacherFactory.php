<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Seeder;
use Faker\Generator;
$records = [
    ['1', '2','3','4']
];
for($i = 0; $i < count($records); $i++)
	{
    $factory->define(App\Model\Teacher::class, function (Generator  $faker) {
        return [
        'customer_name' => $faker->Name,
        'image_teacher' =>$faker->image,
        'birthday' => new Datetime,
        'address' => $faker->Text,
        'email' => $faker->unique()->safeEmail,
        'isactive' =>rand(0,1),
        'status'=> rand(0,4),
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'phone'=> rand(1,11),
        'created_at'=> new Datetime,
        'updated_at'=> new Datetime,
        ];
    });
}