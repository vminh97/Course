<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['teacher_name','image_teacher','birthday','address','email','isactive','status','first_name','last_name','phone'];
}
