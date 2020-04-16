<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        $testimonials = \App\Model\Testimonial::all();

        $all_category = \App\Model\Category::select('id','category_name','category_image','author_id','created_at')->get();
        return view('frontend.home',compact('all_category','testimonials'));
    }
}
