<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Customar extends Controller
{
    public function register(){
        return view('frontend.register');
    }
    public function customar_register(Request $request){
        $validation_rule =[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required|min:6',
        ];
        $this->validate($request,$validation_rule);
        $add_customar = User::insert([
            'name'=>$request->name,
            'rule'=>$request->rule,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'email_verified_at'=>Carbon::now(),
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('customar_login');
    }
    public function login(){
//        Auth::user()->name;
////        if ()
        return view('frontend.login');
    }
}
