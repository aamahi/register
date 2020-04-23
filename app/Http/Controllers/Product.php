<?php

namespace App\Http\Controllers;

use App\Model\Multiple_photo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class Product extends Controller
{
    public function product(){
        $categories = \App\Model\Category::latest()->get();
        $products = \App\Model\Product::latest()->paginate(6);
        return view('Admin.product_list',compact('products','categories'));
    }
    public function add_product(){
        $categories = \App\Model\Category::select('category_name','id')->get();
        return view('Admin.add_product',compact('categories'));
    }
    public function add_product_pro(Request $request){
        $validation_rules = [
            'product_name'=>'required',
            'category_id'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric|min:1',
            'decription'=>'required|min:100',
            'photo'=>'required|image',
        ];

        $this->validate($request,$validation_rules);
        $photo = $request->file('photo');
        $photo_extension =  $photo->getClientOriginalExtension();
        $image = "product_".date('Ymd_his_').rand(1,9).".".$photo_extension;
        $upload_location = base_path('public/Uploads/Products/'.$image);
        Image::make($photo)->resize('540','495')->save($upload_location);
        $product =[];
        $product['product_name']= $request->product_name;
        $product['category_id']= $request->category_id;
        $product['price']= $request->price;
        $product['quantity']= $request->quantity;
        $product['decription']= $request->decription;
        $product['photo']= $image;
        $product['created_at']= Carbon::now();

        $product_id = \App\Model\Product::insertGetId($product);
        $flag =1;
        foreach ($request->file('multiple_photo') as $multiple_photo) {
            $multiple_photo_extension =  $multiple_photo->getClientOriginalExtension();
            $image = "multiple_photo_".date('Ymd_his_').rand(1,100).$flag.".".$multiple_photo_extension;
            $upload_location = base_path('public/Uploads/Multiple_photo/'.$image);
            Image::make($multiple_photo)->resize('540','495')->save($upload_location);
            echo $image."<br/>";
            $flag++;
            $multiple =[];
            $multiple['product_id'] = $product_id;
            $multiple['multiple_photo'] = $image;
            $multiple['created_at'] = Carbon::now();
            Multiple_photo::insert($multiple);
        }
        $notification = array(
            'message' => "Product Added Sucessfully !",
            'alert-type' => 'success'
        );
        return redirect()->route('admin.product')->with($notification);
    }

    public function product_view($id){
        $categories = \App\Model\Category::select('category_name','id')->get();
        $product = \App\Model\Product::with('category','multiple_photos')->find($id);
        $category_id =\App\Model\Product::with('category')->find($id)->category_id;
        $related_product = \App\Model\Product::where('category_id',$category_id)->where('id','!=',$id)->latest()->paginate(3);
        return view('Admin.product_view',compact('product','categories','related_product'));
    }
    public function product_delete($id){
        $product_delete = \App\Model\Product::find($id)->delete();
        $notification = array(
            'message' => "Product Deleted Temporay!",
            'alert-type' => 'error'
        );
        return redirect()->route('admin.product')->with($notification);
    }
}
