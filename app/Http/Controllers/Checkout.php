<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class Checkout extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function checkout(Request $request){
        $rule =Auth::user()->rule;
        if ($rule == 1){
            $total_price = $request->total_price;
            $carts = \App\Model\Cart::with('products')->where('ip_address',request()->ip())->get();
            return view('frontend.checkout',compact('carts','total_price'));
        }else{
            $notification = array(
                'message' => "Something wrong",
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }
    }
//    public function checkout_process(Request $request){
//
//        return view('frontend.checkout',compact('total_price'));
//    }
}
