<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['customer_name','gender','password','image_teacher','birthday','address','email','isactive','status','first_name','last_name','phone'];
}
