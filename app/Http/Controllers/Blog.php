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
       Image::make($image)->resize('825','455')->save($upload_location);
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
    public function blog_details($id){
        $blog=  \App\Model\Blog::with('comments')->find($id);
        return view('Admin.show_blog',compact('blog'));
    }
    public function temporary_delete_blog($id){
        $blog = \App\Model\Blog::find($id);
        $blog->delete();
        $notification = array(
            'message' => "Blog Deleted Temporary",
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }
    public function deleted_blog(){
        $deleted_blog = \App\Model\Blog::onlyTrashed()->get();
        return view('Admin.deleted_blog',compact('deleted_blog'));
    }
    public function restore_blog($id){
        $restore_blog= \App\Model\Blog::withTrashed()->find($id)->restore();
        $notification = array(
            'message' => "Blog Restore Sucessfully!",
            'alert-type' => 'info'
        );
        return redirect()->route('admin.blog')->with($notification);
    }
    public function delete_blog_lifetime($id){
        $dleted_blog= \App\Model\Blog::withTrashed()->find($id)->forceDelete();
        $notification = array(
            'message' => "Blog Deleted LIfetime!",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }


}


