<?php

namespace App\Http\Controllers;

use App\Model\Order_list;
use Illuminate\Http\Request;

class AdminOrder extends Controller
{
    public function orderlist(){
        $orders = \App\Model\Order::latest()->get();
        return view('Admin.orderlist',compact('orders'));
    }
    public function view_order($id){
        echo $id;
    }
    public function delete_order($id){
        //delete Order
        \App\Model\Order::find($id)->delete();

        $notification = array(
            'message' => "Order Deleted Sucessfully",
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);

    }
}
