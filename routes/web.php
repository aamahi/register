<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>['auth','verified']],function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/category','Category@category')->name('category');
    Route::post('/category','Category@add_category');
    Route::get('temporary_delete_category/{id}','Category@temporary_delete_category')->name('temporary_delete_category');
    Route::get('/update/category/{id}','Category@update_category')->name('update_category');
    Route::post('/update_category/{id}','Category@update_category_p');

    Route::get('/deleted_category_list','Category@deletd_category_list')->name('deletd_category_list');
    Route::get('/deleted_category/{id}','Category@deletd_category')->name('deletd_category');
    Route::get('/restore_category/{id}','Category@restore_category')->name('restore_category');

    //Testemonial
    Route::Get('/testimonial','Testimonial@testimonial')->name('testimonial');
    Route::Post('/testimonial','Testimonial@testimonial_add');
    Route::get('/delete_testimonial/{id}','Testimonial@delete_testimonial')->name('delete_testimonial');

    //Contact
    Route::get('/admin/contact','Contract@contact')->name('admin.contact');
    Route::get('/admin/delete_contact_message/{id}','Contract@delete_contact_message')->name('delete_contact_message');
    Route::get('/admin/show_contact_message/{id}','Contract@show_contact_message')->name('show_contact_message');

    // BLog

    Route::Get('/admin/blog/','Blog@blog_list')->name('admin.blog');
    Route::Post('/admin/blog/','Blog@add_blog');
    Route::Get('/admin/blog_details/{id}','Blog@blog_details')->name('admin.blog_details');
    Route::Get('/temporary_delete_blog/{id}','Blog@temporary_delete_blog')->name('temporary_delete_blog');
    Route::Get('/deleted_blog','Blog@deleted_blog')->name('deleted_blog');
    Route::Get('/restore_blog/{id}','Blog@restore_blog')->name('restore_blog');
    Route::Get('/delete_blog_lifetime/{id}','Blog@delete_blog_lifetime')->name('delete_blog_lifetime');

    // Product
    Route::get('/admin/product/','Product@product')->name('admin.product');
    Route::get('/add/product/','Product@add_product')->name('add_product');
    Route::post('/add/product/','Product@add_product_pro');
    Route::get('/product_view/{id}','Product@product_view')->name('product_view');

    // Product
    Route::get('/admin/banner/','Banner@banner')->name('admin.banner');
    Route::post('/admin/banner/','Banner@add_banner');
    Route::get('/admin/banner_delete/{id}','Banner@delete_banner')->name('delete_banner');
    Route::get('/admin/restore_banner/{id}','Banner@restore_banner')->name('restore_banner');
    Route::get('/admin/d_slider/{id}','Banner@d_slider')->name('d_slider');
    Route::get('/admin/slider_delete/','Banner@deleted_slider')->name('delete_slider');

});
//      Frontend Controller

Route::get('/','Frontend@home')->name('home');
Route::get('/blog','Frontend@blog')->name('blog');
Route::get('/blog/details/{id}','Frontend@blog_details')->name('blog_details');
Route::get('/product/details/{id}','Frontend@product_details')->name('product_detailse');

Route::get('/contact','Frontend@contact')->name('contact');
Route::get('/about','Frontend@about')->name('about');
Route::get('/shop','Frontend@shop')->name('shop');
Route::get('/cart','Frontend@cart')->name('cart');
Route::get('/wish','Frontend@wish')->name('wish');
Route::post('/contact','Frontend@contact_send');

Route::post('/comment','Comment@send');
Route::post('/add_cart','Cart@add_cart')->name('add_cart');
Route::post('/add_wish','Wish@add_wish')->name('add_wish');
//      AUTH ROUTE
Auth::routes(['verify' => true]);


