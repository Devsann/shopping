<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infotech extends Model
{
    protected $fillable=[
        'title',
        'price',
        'phone',
        'about',
        'imgs',
        'created_at',
    ];

}
