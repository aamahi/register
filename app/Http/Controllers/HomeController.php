<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_user = User::select('id','name','email','created_at','rule')->orderBy('created_at','DESC')->paginate(3);
        $total_user = User::count();
        return view('home',compact('all_user','total_user'));
    }

}
