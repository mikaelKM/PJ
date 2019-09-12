<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    protected $fillable = [
        'user','project_name', 'type', 'framework', 'phone', 'mode', 'location', 'attachment', 'description'
    ];
}
