<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','ctitle','mtitle', 'image','description','type_id'
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }
}
