<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wish extends Controller
{
    public function add_wish(Request $request){
        $ip_address = request()->ip();
        $wish_add = [];
        $wish_add['product_id'] = $request->product_id;
        $wish_add['ip_address'] = $ip_address;
        if (\App\Model\Wish::where('product_id',$request->product_id)->where('ip_address',$ip_address)->exists()){
            $notification = array(
                'message' => "Product Already add Wishlist",
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }else{
            $wish_add = \App\Model\Wish::insert($wish_add);
            $notification = array(
                'message' => "Product Add to Wishlist",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
