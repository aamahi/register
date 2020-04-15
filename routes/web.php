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

    Route::get('/category','Category@index')->name('category');
    Route::get('/category','Category@category')->name('category');
    Route::post('/category','Category@add_category');
    Route::get('/update/category/{id}','Category@update_category')->name('update_category');
    Route::post('/update/category/{id}','Category@edit_category');

    //Testemonial
    Route::Get('/testimonial','Testimonial@testimonial')->name('testimonial');
    Route::Post('/testimonial','Testimonial@testimonial_add');
    Route::get('/delete_testimonial/{id}','Testimonial@delete_testimonial')->name('delete_testimonial');
});
//      Frontend Controller

Route::get('/','Frontend@home')->name('home');

//      AUTH ROUTE
Auth::routes(['verify' => true]);


