<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable=
        [
            'product_name',
            'category_id',
            'price',
            'quantity',
            'description',
            'image',
        ];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
