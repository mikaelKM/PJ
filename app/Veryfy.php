<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veryfy extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'fname', 'sname','image','phone','code'
    ];
}//

