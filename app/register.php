<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    //
    protected $table = 'registers';
    protected $fillable = ['firstname', 'lastname', 'phone','address','email','password','type'];
}
