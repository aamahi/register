<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        $sliders = \App\Model\Banner::all();
        $testimonials = \App\Model\Testimonial::all();
        $latest_product =\App\Model\Product::latest()->paginate('8');
        $all_category = \App\Model\Category::select('id','category_name','category_image','author_id','created_at')->get();
        return view('frontend.home',compact('all_category','testimonials','latest_product','sliders'));
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

    public function product_details($id){

        $product_details = \App\Model\Product::with('category','multiple_photos')->find($id);
        $category_id =\App\Model\Product::with('category')->find($id)->category_id;
        $related_product = \App\Model\Product::where('category_id',$category_id)->where('id','!=',$id)->latest()->paginate(4);
        return view('frontend.product_details',compact('product_details','related_product'));
    }
    public function shop(){
        $categories = \App\Model\Category::all();
        $products = \App\Model\Product::all();
        return view('frontend.shop',compact('categories','products'));
    }
    public function about(){
        $all_category = \App\Model\Category::select('id','category_name','category_image','author_id','created_at')->get();
        return view('frontend.about',compact('all_category'));
    }

    public function cart(Request $request){
        $cupon_name =$request->cupon_name;
        if ($cupon_name){
            if (\App\Model\Cupon::where('cupon_name',$cupon_name)->exists()){
                if(\App\Model\Cupon::where('cupon_name',$cupon_name)->first()->validity_till>=Carbon::now()->format('Y-m-D')){
                    $discount = \App\Model\Cupon::where('cupon_name',$cupon_name)->first()->discount;
                    $carts = \App\Model\Cart::with('products')->where('ip_address',request()->ip())->get();
                    return view('frontend.cart',compact('carts','discount'));
                }else{
                    $notification = array(
                        'message' => "Invalid Cupon",
                        'alert-type' => 'error'
                    );
                    return redirect()->back()->with($notification);
                }
            }else{
                $notification = array(
                    'message' => "No Cupon Found!",
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        }else{
            $carts = \App\Model\Cart::with('products')->where('ip_address',request()->ip())->get();
            return view('frontend.cart',compact('carts'));
        }

    }
    public function wish(){
        $wishes = \App\Model\Wish::with('products')->where('ip_address',request()->ip())->get();
        return view('frontend.wish',compact('wishes'));
    }
}











