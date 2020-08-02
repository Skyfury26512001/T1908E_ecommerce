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
    })->name('admin');
    Route::group(['prefix' => '/brands'], function () {
        Route::get('/', 'BrandController@index')->name('admin_brand');
        Route::get('/create', 'BrandController@create')->name('admin_brand_create');
        Route::post('/store','BrandController@store')->name('admin_brand_store');
        Route::get('/edit/{slug}', 'BrandController@edit')->name('admin_brand_edit');
        Route::put('/update/{id}', 'BrandController@update')->name('admin_brand_update');
        Route::put('/delete/{id}', 'BrandController@delete')->name('admin_brand_delete');
        Route::put('/deleteAll', 'BrandController@delete_multi')->name('admin_brand_delete_multi');
    });
    Route::group(['prefix' => '/origins'], function () {
        Route::get('/', 'OriginController@index')->name('admin_origin');
        Route::get('/create', 'OriginController@create')->name('admin_origin_create');
        Route::post('/store','OriginController@store')->name('admin_origin_store');
        Route::get('/edit/{slug}', 'OriginController@edit')->name('admin_origin_edit');
        Route::put('/update/{id}', 'OriginController@update')->name('admin_origin_update');
        Route::put('/delete/{id}', 'OriginController@delete')->name('admin_origin_delete');
        Route::put('/deleteAll', 'OriginController@delete_multi')->name('admin_origin_delete_multi');
    });
    Route::group(['prefix' => '/products'], function () {
        Route::get('/', 'ProductController@admin_index')->name('admin_product_list');
        Route::get('/create', 'ProductController@create')->name('admin_product_create');
        Route::post('/store','ProductController@store')->name('admin_product_store');
        Route::get('/edit/{slug}', 'ProductController@edit')->name('admin_product_edit');
        Route::put('/update/{id}', 'ProductController@update')->name('admin_product_update');
        Route::put('/delete/{id}', 'ProductController@delete')->name('admin_product_delete');
        Route::put('/deleteAll', 'ProductController@delete_multi')->name('admin_product_delete_multi');
    });
    Route::get('/demo_table', function () {
        return view('admin.tables_datatable');
    });
});

// test : route
Route::get('checking_page', function () {
    return view('session_checking');
});
Route::get('/test/{haha}', function () {
    return 'haha';
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


