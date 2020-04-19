<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class Banner extends Controller
{
    public function banner(){
        return view('Admin.banner');
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
        Image::make($photo)->resize('1920','1000')->save($upload_location);
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
}
