<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table = 'certificate';
    protected $fillable = ['name_certificate','title_certificate','content_certificate','certificatesbill_id'];

}
