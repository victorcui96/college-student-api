<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = []; // allows an HTTP request to update Album model via REST methods like POST
}
