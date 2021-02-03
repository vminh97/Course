<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['customer_name','image_customer','birthday','address','email','isactive','status','first_name','last_name','phone','certificatesbill_id'];
}
