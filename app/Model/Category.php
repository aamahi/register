<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['author_id','category_name','category_image'];
    public function users(){
        $this->hasOne('User','id','author_id');
    }
}
