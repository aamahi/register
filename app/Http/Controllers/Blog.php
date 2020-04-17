<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class Blog extends Controller
{
    public function blog_list(){
        $blog_list = \App\Model\Blog::latest()->get();
        return view('Admin.write_blog',compact('blog_list'));
    }
    public function add_blog(Request $request){
       $validation_rule = [
           'title'=>'required|min:15',
           'details'=>'required|min:45',
           'photo'=>'required|image',
       ];
       $this->validate($request,$validation_rule);

       $image = $request->file('photo');
       $image_extension = $image->getClientOriginalExtension();
       $photo = "blogphoto".date('Ymd_his_').rand(1,20).".".$image_extension;
       $upload_location = base_path("public/Uploads/Blog/".$photo);
       Image::make($image)->resize('550','370')->save($upload_location);
       $post =[];
       $post['title']= $request->title;
       $post['author_id']= $request->author_id;
       $post['details']= $request->details;
       $post['photo']= $photo;
       $post['created_at']= Carbon::now();
       $add_blog = \App\Model\Blog::insert($post);
        $notification = array(
            'message' => "Blog Post Submited",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
