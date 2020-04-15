<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testimonial extends Controller
{
    public function testimonial(){
        $all_testimonial = \App\Model\Testimonial::all();
        return view('Admin.testimonial',compact('all_testimonial'));
    }

    public function testimonial_add(Request $request){
        $validation_rule =[
            'clint_name'=>'required',
            'position'=>'required',
            'message'=>'required|min:30',
            'photo'=>'required|mimes:jpeg,jpg,png',
        ];
        $this->validate($request,$validation_rule);
        $image = $request->file('photo');
        $image_extension = $image->getClientOriginalExtension();
        $photo = "clintimage_".date("Ydmhi_s_").rand(1,9).".".$image_extension;
       if($image->isValid()){
           $image->move("Uploads/Testimonial/",$photo);
       }
       $data = [];
       $data['clint_name'] = $request->clint_name;
       $data['position'] = $request->position;
       $data['message'] = $request->message;
       $data['photo'] = $photo;
       $add_testimonial = \App\Model\Testimonial::create($data);
       if($add_testimonial){
           $notification = array(
               'message' => 'Testimonial Added Sucessfully ',
               'alert-type' => 'success'
           );
       }
       return redirect()->back()->with($notification);

    }
}
