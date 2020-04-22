<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    public function add_cart(Request $request){
        $ip_address = request()->ip();
        $cart_add = [];
        $cart_add['product_id'] = $request->product_id;
        $cart_add['ip_address'] = $ip_address;
        $cart_add['quantity'] = $request->quantity;
        if (\App\Model\Cart::where('product_id',$request->product_id)->where('ip_address',$ip_address)->exists()){
            \App\Model\Cart::where('product_id',$request->product_id)->where('ip_address',$ip_address)->increment('quantity',$request->quantity);
        }else{
            $cart_add = \App\Model\Cart::insert($cart_add);
        }
        $notification = array(
            'message' => "Product Add to Cart",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
