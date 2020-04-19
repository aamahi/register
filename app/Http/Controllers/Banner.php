<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class Banner extends Controller
{
    public function banner(){
        $all_banner = \App\Model\Banner::latest()->get();
        return view('Admin.banner',compact('all_banner'));
    }
    public function add_banner(Request $request){
        $validation_rule =[
            'banner_title'=>'required',
            'description'=>'required|min:75',
            'photo'=>'required|image',
        ];
        $this->validate($request,$validation_rule);

        $photo =  $request->file('photo');
        $photo_extension = $photo->getClientOriginalExtension();
        $image = "banner_".date('Ymd_his').rand(1,20).".".$photo_extension;
        $upload_location = base_path("public/Uploads/Banner/".$image);
        Image::make($photo)->resize('1920','740')->save($upload_location);
        $add_banner =[];
        $add_banner['banner_title'] = $request->banner_title;
        $add_banner['description'] = $request->description;
        $add_banner['photo'] = $image;
        $addBanner = \App\Model\Banner::insert($add_banner);
        $notification = array(
            'message' => "Banner Added Successfully",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function delete_banner($id){
        $banner = \App\Model\Banner::find($id)->delete();
        $notification = array(
            'message' => "Banner Deleted Temporary",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function deleted_slider(){
        $delete_slider = \App\Model\Banner::onlyTrashed()->get();
        return view('Admin.deleted_slider',compact('delete_slider'));
    }
    public function restore_banner($id){
        $restore_banner = \App\Model\Banner::withTrashed()->find($id)->restore();
        $notification = array(
            'message' => "Banner Restored",
            'alert-type' => 'info'
        );
        return redirect()->route('admin.banner')->with($notification);
    }
    public function d_slider($id){
        $restore_banner = \App\Model\Banner::withTrashed()->find($id)->forceDelete();
        $notification = array(
            'message' => "Banner Deleted Sucessfully!",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
