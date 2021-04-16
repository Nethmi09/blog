<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'f_name','l_name','ad_line1','ad_line2','email','phone_number'
    ];
}
