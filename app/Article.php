<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'image','description','type_id'
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }
}
