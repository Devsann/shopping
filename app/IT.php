<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IT extends Model
{
    protected $fillable=[
        'title',
        'price',
        'about',
        'imgs',
    ];
}
