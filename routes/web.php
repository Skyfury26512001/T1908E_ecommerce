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

// user : route
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/product',function ()
{
    return view('products.product_detail');
});
Route::get('/product_list',function (){
    return view('products.product_list');
});
Route::get('/about_us',function (){
   return view('about');
});
Route::get('/contact',function (){
    return view('contact');
});

// login - register : route
Route::get('login','AccountController@index')->name('login');
Route::post('registerProcess','AccountController@registerProgress')->name('registerP');
Route::post('loginProcess','AccountController@loginProgress')->name('loginP');


// admin : route

Route::group(['middleware' => ['admin_check'],'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return 'admin view';
    });
});

//
Route::get('checking_page',function (){
    return view('session_checking');
});