<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sitesetting extends Model
{
    protected $fillable = [
        'name', 'value',
    ];
}
