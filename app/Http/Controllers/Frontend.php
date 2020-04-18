<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        $testimonials = \App\Model\Testimonial::all();
        $latest_product =\App\Model\Product::latest()->paginate('8');
        $all_category = \App\Model\Category::select('id','category_name','category_image','author_id','created_at')->get();
        return view('frontend.home',compact('all_category','testimonials','latest_product'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contact_send(Request $request){

        $this->validate($request,[
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $contact = [];
        $contact['name'] = $request->name;
        $contact['email'] = $request->email;
        $contact['subject'] = $request->subject;
        $contact['message'] = $request->message;
        $contact['created_at'] = Carbon::now();
        $send = Contact::insert($contact);
        $notification = array(
            'message' => "Thank you !",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function blog(){
        $blogs = \App\Model\Blog::latest()->paginate('3');
        return view('frontend.blog',compact('blogs'));
    }
    public function blog_details($id){
        $blog_details = \App\Model\Blog::with('comments')->find($id);
        $categories = \App\Model\Category::select('category_name')->get();
        $blogs = \App\Model\Blog::latest()->paginate(5);
        return view('frontend.blog_details',compact('blog_details','blogs','categories'));
    }
}
