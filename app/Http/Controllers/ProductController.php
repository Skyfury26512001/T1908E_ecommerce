<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Origin;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $product_style = $product->style;
        $style_arr = explode(',', $product_style);
//        dd($style_arr);
        $item_query = Product::where('status', '1')->where('slug', '!=', $product->slug);
        foreach ($style_arr as $style) {
            $item_query->orWhere('style', '=', '%' . $style . '%');
        }
        $eloquent_product = $item_query->take(3)->get();
        $eloquent_product_5 = $item_query->take(5)->get();
        $item_brand_query = Product::where('status','1')->where('id','!=',$product->id);
        $item_brand_query->where('brand_id','=',$product->brand->id);
        $eloquent_product_brand = $item_brand_query->get();
//        dd($eloquent_product_brand);
//        dd($product->brand->id);
        return view('products.product_detail',compact('eloquent_product_5','eloquent_product_brand'))->with('product', $product)->with('eloquent_product',$eloquent_product);
    }

    public function admin_index(Request $request)
    {

        $numberItem = 5;
        $orderBy = "ASC";
        $query = Product::where('status', '=', '1');
        $datas = new Array_();


        if ($request->has('origin') && $request->origin != "0") {
            $query->where('origin_id', $request->origin);
            $datas->origin = $request->origin;
        }
        if ($request->has('brand') && $request->brand != "0") {
            $query->where('brand_id', $request->brand);
            $datas->brand = $request->brand;
        }
        if ($request->has('inventor') && $request->inventor != null && strlen($request->inventor) > 0) {
            $query->where('inventor_name', 'like', '%' . $request->inventor . '%');
            $datas->inventor = $request->inventor;
        }
        if ($request->has('product_name') && $request->product_name != null && strlen($request->product_name) > 0) {
            $query->where('name', 'like', '%' . $request->product_name . '%');
            $datas->product_name = $request->product_name;
        }
        $products = $query->orderBy('id', 'desc')->paginate(5);
//        dd($products);
//        $asda = hello;
//        if ($request->has('keyword')){
//            $products = Product::where('status','=','1')->where('name','like','%'.$request->keyword.'%')->orderBy('id',$orderBy)->paginate($numberItem)->appends($request->only('keyword'));
//            return view('admin.products.brand_list',compact('products'));
//        }
//        $products = Product::where('status','=','1')->orderBy('id',$orderBy)->paginate($numberItem);
////        dd($products);


        $brands = Brand::where('status', '=', '1')->orderBy('id', $orderBy)->get();
        $origins = Origin::where('status', '=', '1')->orderBy('id', $orderBy)->get();
        return view('admin.products.product_list')->with(compact('products', 'brands', 'origins', 'datas'));

    }

    public function create()
    {
        $brands = Brand::where('status', '=', '1')->orderBy('id', 'ASC')->get();
        $origins = Origin::where('status', '=', '1')->orderBy('id', 'ASC')->get();
        return view('admin.products.create')->with(compact('brands', 'origins'));;
    }

    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required|integer',
            'origin_id' => 'required|integer',
            'sex' => 'required',
            'concentration' => 'required',
            'volume' => 'required',
            'inventor_name' => 'required',
            'recommended_age' => 'required',
            'released_year' => 'required',
            'incense_level' => 'required',
            'aroma_level' => 'required',
            'price' => 'required',
            'style' => 'required',
            'recommended_time' => 'required',
            'thumbnails' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Tên hãng là cần thiết',
            'brand_id.required' => 'Bắt buộc phải có hãng sản phẩm',
            'origin_id.required' => 'Bắt buộc phải có xuất xứ',
            'sex.required' => 'Bắt buộc phải có giới tính ',
            'concentration.required' => 'Bắt buộc phải có nồng độ',
            'volume.required' => 'Bắt buộc phải có  dung lượng',
            'inventor_name.required' => 'Bắt buộc phải có tên nhà phát minh',
            'recommended_age.required' => 'Bắt buộc phải có tuổi đề nghị',
            'released_year.required' => 'Bắt buộc phải có năm ra mắt',
            'incense_level.required' => 'Bắt buộc phải có độ lưu hương',
            'aroma_level.required' => 'Bắt buộc phải có ảnh đại diện',
            'price.required' => 'Bắt buộc phải có giá tiền',
            'style.required' => 'Bắt buộc phải có ảnh đại diện',
            'recommended_time.required' => 'Bắt buộc phải có thời gian khuyến nghị',
            'thumbnails.required' => 'Bắt buộc phải có ảnh sản phẩm',
            'description.required' => 'Cần thêm mô tả hãng',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = sanitize($product->name);
        $product->brand_id = $request->brand_id;
        $product->origin_id = $request->origin_id;
        $product->sex = $request->sex;
        $product->concentration = $request->concentration;
        $product->volume = $request->volume;
        $product->inventor_name = $request->inventor_name;
        $product->recommended_age = $request->recommended_age;
        $product->released_year = $request->released_year;
        $product->incense_level = $request->incense_level;
        $product->aroma_level = $request->aroma_level;
        $product->price = $request->price;
        $product->style = $request->style;
        foreach ($request->recommended_time as $time) {
            $product->recommended_time .= $time . ",";
        }

        $product->description = $request->description;
        foreach ($request->thumbnails as $thumb) {
            $product->thumbnail .= $thumb . ",";
        }
//        $product->thumbnail = ;
        $product->status = 1;

//        dd($product);
        $product->save();
        return redirect(route('admin_product_list'));
    }

    public function edit(Request $request, $id)
    {
        $brands = Brand::where('status', '=', '1')->orderBy('id', 'ASC')->get();
        $origins = Origin::where('status', '=', '1')->orderBy('id', 'ASC')->get();
        $product = Product::where('status', '=', '1')->where('id', '=', $id)->first();
        return view('admin.products.edit', compact('product', 'brands', 'origins'));
    }

    public function add_to_cart(Request $request)
    {

        $id = $request->id;
        $quantity = $request->quantity;
        $volume = $request->volume;
        // kiểm tra sản phẩm theo id truyền lên.
        $product = Product::where('status', '=' , '1')->where('id','=',$id)->get();
        if ($product == null){
            return view('404');
        }
        // lấy thông tin giỏ hàng từ trong session.
        $shopping_cart = Session::get('shoppingCart');

        if ($shopping_cart == null) {
            // thì tạo mới giỏ hàng là một mảng các key và value
            $shopping_cart = array(); // key và value
        }
        $cartItem = null;

        if (array_key_exists($id, $shopping_cart)) {
            $cartItem = $shopping_cart[$id];
        }

        if ($cartItem == null) {
            // nếu không, tạo mới một cart item.
            $cartItem = [
                'product' => $product,
            ];
            $cartItem['type'][$volume] = $quantity;
        } else {
            // nếu có, cộng số lượng sản phẩm thêm.
            if (array_key_exists($volume, $shopping_cart[$id]['type'])) {
                $cartItem['type'][$volume] += $quantity;
            }else{
                $cartItem['type'][$volume] = $quantity;
            }
        }

        $shopping_cart[$id] = $cartItem;
//        if($cartItem['volume']['quantity'] <= 0){
//            unset($shopping_cart[$product->id]);
//        }
        Session::put('shoppingCart', $shopping_cart);
        $request->session()->save();

        return response()->json(['success' => "Products added to cart successfully."]);
    }

    public function add(Request $request)
    {
        $id = $request->get('productId');
        $quantity = $request->get('quantity');
        // kiểm tra sản phẩm theo id truyền lên.
        $product = Product::find($id);
        if ($product == null) {
            // nếu không tồn tại sản phẩm đưa về trang lỗi ko tìm thấy.
            return view('404');
        }

        // lấy thông tin giỏ hàng từ trong session.
        $shoppingCart = Session::get('shoppingCart');
        // nếu session ko có thông tin giỏ hàng
        if ($shoppingCart == null) {
            // thì tạo mới giỏ hàng là một mảng các key và value
            $shoppingCart = array(); // key và value
        }
        // kiểm xem sản phẩm có trong giỏ hàng hay không.
        $cartItem = null;
        if (array_key_exists($id, $shoppingCart)) {
            $cartItem = $shoppingCart[$id];
        }
        if ($cartItem == null) {
            // nếu không, tạo mới một cart item.
            $cartItem = array(
                'productId' => $product->id,
                'productName' => $product->name,
                'productPrice' => $product->price,
                'quantity' => $quantity
            );
        } else {
            // nếu có, cộng số lượng sản phẩm thêm 1.
            $cartItem['quantity'] += $quantity;
        }
        // đưa sản phẩm vào giỏ hàng với key chính là id của sản phẩm.
        $shoppingCart[$product->id] = $cartItem;
//        if($cartItem['quantity'] <= 0){
//            unset($shoppingCart[$product->id]);
//        }
        Session::put('shoppingCart', $shoppingCart);
//        return redirect('/shopping-cart/show');
    }

    public function search(Request $request){
        $keyword = $request->keyword;

        $brands = Brand::where('status','=','1')->get();
        $origins = Origin::where('status','=','1')->get();
//        dd($brands);
        $product_search = Product::where('status','=','1')->where('slug','LIKE','%'.$keyword.'%')->paginate(9);
        return view('products.product_list',compact('brands','origins'))->with('products',$product_search);
    }
    public function productList(Request $request){
        dd($request->product);
    }
    public function update(Request $request,$id)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required|integer',
            'origin_id' => 'required|integer',
            'sex' => 'required',
            'concentration' => 'required',
            'volume' => 'required',
            'inventor_name' => 'required',
            'recommended_age' => 'required',
            'released_year' => 'required',
            'incense_level' => 'required',
            'aroma_level' => 'required',
            'price' => 'required',
            'style' => 'required',
            'recommended_time' => 'required',
            'thumbnails' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Tên hãng là cần thiết',
            'brand_id.required' => 'Bắt buộc phải có hãng sản phẩm',
            'origin_id.required' => 'Bắt buộc phải có xuất xứ',
            'sex.required' => 'Bắt buộc phải có giới tính ',
            'concentration.required' => 'Bắt buộc phải có nồng độ',
            'volume.required' => 'Bắt buộc phải có  dung lượng',
            'inventor_name.required' => 'Bắt buộc phải có tên nhà phát minh',
            'recommended_age.required' => 'Bắt buộc phải có tuổi đề nghị',
            'released_year.required' => 'Bắt buộc phải có năm ra mắt',
            'incense_level.required' => 'Bắt buộc phải có độ lưu hương',
            'aroma_level.required' => 'Bắt buộc phải có ảnh đại diện',
            'price.required' => 'Bắt buộc phải có giá tiền',
            'style.required' => 'Bắt buộc phải có ảnh đại diện',
            'recommended_time.required' => 'Bắt buộc phải có thời gian khuyến nghị',
            'thumbnails.required' => 'Bắt buộc phải có ảnh sản phẩm',
            'description.required' => 'Cần thêm mô tả hãng',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = sanitize($product->name);
        $product->brand_id = $request->brand_id;
        $product->origin_id = $request->origin_id;
        $product->sex = $request->sex;
        $product->concentration = $request->concentration;
        $product->volume = $request->volume;
        $product->inventor_name = $request->inventor_name;
        $product->recommended_age = $request->recommended_age;
        $product->released_year = $request->released_year;
        $product->incense_level = $request->incense_level;
        $product->aroma_level = $request->aroma_level;
        $product->price = $request->price;
        $product->style = $request->style;
        foreach ($request->recommended_time as $time) {
            $product->recommended_time .= $time . ",";
        }

        $product->description = $request->description;
        foreach ($request->thumbnails as $thumb) {
            $product->thumbnail .= $thumb . ",";
        }
//        $product->thumbnail = ;
        $product->status = 1;

//        dd($product);
        $product->update();
//        dd($product);
        return redirect(route('admin_product_list'));
    }
}
