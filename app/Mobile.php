<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $fillable=[
        'brand',
        'price',
        'phone',
        'about',
        'img',
        'created_at',
    ];
}
