<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Cupon extends Controller
{
    public function cupon(){
        $cupons = \App\Model\Cupon::all();
        return view('Admin.cupon',compact('cupons'));
    }
    public function add_cupon(Request $request){
        $validation_rules = [
            'cupon_name'=>'required|unique:cupons,cupon_name',
            'discount'=>'required|numeric|min:1|max:99',
            'validity_till'=>'required',
        ];
        $this->validate($request ,$validation_rules);
        $add_cupon = \App\Model\Cupon::insert([
            'cupon_name'=>strtoupper($request->cupon_name),
            'discount'=>$request->discount,
            'validity_till'=>$request->validity_till,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message' => "Cupon Added Sucessfully",
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
    public function delete_cupon($id){
        \App\Model\Cupon::find($id)->delete();
        $notification = array(
            'message' => "Cupon Deleted ",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
