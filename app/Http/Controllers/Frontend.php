<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        $testimonials = \App\Model\Testimonial::all();
        return view('frontend.home',compact('testimonials'));
    }
}
