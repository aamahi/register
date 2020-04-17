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
    Route::post('/update/category/{id}','Category@edit_category');
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
});
//      Frontend Controller

Route::get('/','Frontend@home')->name('home');
Route::get('/blog','Frontend@blog')->name('blog');
Route::get('/contact','Frontend@contact')->name('contact');
Route::post('/contact','Frontend@contact_send');

//      AUTH ROUTE
Auth::routes(['verify' => true]);


