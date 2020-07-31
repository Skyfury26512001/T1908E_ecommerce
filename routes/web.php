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

//Route::get('/product', function () {
//    return view('products.product_detail');
//});

Route::get('/product_list', function () {
    return view('products.product_list');
});

Route::get('/about_us', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/productsInfo', 'ProductController@index');

// login - register : route
Route::get('login', 'AccountController@index')->name('login');
Route::post('registerProcess', 'AccountController@registerProgress')->name('registerP');
Route::post('loginProcess', 'AccountController@loginProgress')->name('loginP');
Route::post('/logoutaccount', 'AccountController@logOut')->name('logout');

// admin : route
Route::group(['middleware' => ['admin_check'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/brands', 'BrandController@index');
    Route::get('/demo_table', function () {
        return view('admin.tables_datatable');
    });
});

// test : route
Route::get('checking_page', function () {
    return view('session_checking');
});

Route::get('/multi_delete', function () {
    $products = \App\Product::all()->where('status', '=', '1');
    return view('test_multi_delete', compact('products'));
});
Route::post('/multi_delete_action', function (Illuminate\Http\Request $request) {
    $products_array = $request->products_id;
//    dd($products_array);
    //check product con ton` tai hay khong
    dd(\App\Product::whereIn('id', $request['products_id'])->update(['status' => 0]));
})->name('multi_delete_action');


