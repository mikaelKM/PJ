<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approved_job extends Model
{
    protected $fillable = [
        'user',
        'project',
        'project_name', 
        'type', 
        'framework', 
        'phone', 
        'mode', 
        'location', 
        'attachment', 
        'description'
    ]; //
}
