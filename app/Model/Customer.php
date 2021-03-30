<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['customer_name','image_customer','birthday','address','email','isactive','status','first_name','last_name','phone','certificatesbill_id'];

    protected $appends = [
        'avatar_path'
    ];

    public function getAvatarPathAttribute()
    {
        if (empty($this->attributes['image_customer'])) {
            return Avatar::create($this->attributes['name'])
                ->setDimension(30, 30)
                ->setFontSize(10)
                ->setShape('square')
                ->toBase64();
        }

        return $this->attributes['image_customer']; 
    }
};
