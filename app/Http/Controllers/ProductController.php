<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::first();
        return view('products.product_detail')->with('product', $product);
    }git
}
