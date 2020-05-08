<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'zip',
        'city',
        'payment',
        'subtotal',
        'total',
        'status',
    ];
    public  function order_lists(){
        return $this->hasMany('App\Model\Order_list','order_id','id');
    }
}
