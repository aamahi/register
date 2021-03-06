<?php

namespace App\Model;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['quantity'];
    public function products(){
        return $this->hasOne(Product::class,'id','product_id');
    }

}
