<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;

class Post extends Model
{
    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments(){

        return $this->hasMany('App\Comment');

    }

    public function getBodyAttribute($body)
    {
        return Blade::compileString($body);
    }
}
