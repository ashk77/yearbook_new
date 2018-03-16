<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
     protected $fillable = [
        'name', 'address', 'latitude','longitude','rollno'
    ];
}
