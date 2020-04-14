<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function users(){
        $this->hasOne('User','id','author_id');
    }
}
