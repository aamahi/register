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
    public function checkout(){
        $rule =Auth::user()->rule;
        if ($rule == 1){
            return view('frontend.checkout');
        }else{
            $notification = array(
                'message' => "Something wrong",
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }
    }
}
