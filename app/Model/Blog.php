<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','details','author_id','photo'];
    public  function comments(){
        return $this->hasMany('App\Model\Comment','post_id','id');
    }
}

