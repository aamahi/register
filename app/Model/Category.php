<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['author_id','category_name','category_image'];

    public function users(){
        $this->hasOne('User','id','author_id');
    }
}
