<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
class Category extends Controller
{
    public function index(){
        return view('Admin.category');
    }
    public function add_category(Request $request)
    {
        $validation_rules = [
            'add_category' => ' required | min:4|unique:categories,category_name',
            'category_image' => 'required |mimes:jpg,png,jpeg' //|imagemimes:jpg,png,jpeg,JPG
        ];
        $this->validate($request, $validation_rules, [
            'add_category.required' => 'Please add a Category',
//            'add_category.unique:categories,category_name' => 'Category is allready used',
        ]);

        $photo = $request->file('category_image');
        $photo_extensiton = $photo->getClientOriginalExtension();
        $image = "categoryImage_".date("Ymd_his_").rand(1,50).".".$photo_extensiton;
        $upload_location = base_path('public/Uploads/Category/'.$image);
        Image::make($photo)->resize(360,160)->save($upload_location,75);
        $add_category= \App\Model\Category::insert([
            'category_name' => $request->add_category,
            'author_id' => $request->author_id,
            'category_image' => $image,
            'created_at' => Carbon::now(),
        ]);
        if ($add_category){
        $notification = array(
            'message' => "Category Added Successfully",
            'alert-type' => 'success'
        );
        }
        return redirect()->back()->with($notification);
    }

    public function category(){
        $all_category = \App\Model\Category::select('id','category_name','category_image','author_id','created_at')->get();
        return view('Admin.category',compact('all_category'));
    }

    public function update_category($id){
        $update_category = \App\Model\Category::find($id);
        return view('Admin.update_category',compact('update_category'));
    }
   public function edit_category(Request $request,$id){
        $update_category = \App\Model\Category::find($id);
        $validation_rules = [
            'add_category'=>'required | unique:categories,category_name',
            'category_image'=>'required | mimes:jpg,png,jpeg',
        ];
        $this->validate($request,$validation_rules);

        $update_category->category_name = $request->add_category;
        $update_category->save();
        return redirect()->back();
   }

}
