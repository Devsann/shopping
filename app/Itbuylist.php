<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itbuylist extends Model
{
    protected $fillable=[
       'name',
       'mail',
        'phone',
       'pdname',
       'dtail',
        'created_at',
    ];
}
