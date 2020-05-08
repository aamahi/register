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
        $customar_info= \App\Model\Order::with('order_lists')->find($id);
        return view('Admin.view_order',compact('customar_info'));
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
    public function order_delivary($id){
       $update = \App\Model\Order::find($id);
       $update->status = 1;
       $update->save();
        $notification = array(
            'message' => "Order Delivary Sucessfully",
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
    public function order_cancel($id){
        $update = \App\Model\Order::find($id);
        $update->status = 2;
        $update->save();
        $notification = array(
            'message' => "Order Cancel Sucessfully",
            'alert-type' => 'error'
        );

        return redirect()->route('admin.order')->with($notification);
    }
}
