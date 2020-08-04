<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Origin;
use Illuminate\Http\Request;
use App\Product;
use PhpParser\Node\Expr\Array_;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::first();
        return view('products.product_detail')->with('product', $product);
    }

    public function admin_index(Request $request){

        $numberItem = 5;
        $orderBy = "ASC";
        $query = Product::where('status','=','1');
        $datas = new Array_();




        if ($request->has('origin') && $request->origin != "0"){
            $query->where('origin_id', $request->origin);
            $datas->origin = $request->origin;
        }
        if ($request->has('brand') && $request->brand != "0"){
            $query->where('brand_id', $request->brand);
            $datas->brand = $request->brand;
        }
        if ($request->has('inventor') && $request->inventor != null && strlen($request->inventor) > 0){
            $query->where('inventor_name', 'like','%'.$request->inventor.'%');
            $datas->inventor = $request->inventor;
        }
        if ($request->has('product_name') && $request->product_name != null && strlen($request->product_name) > 0){
            $query->where('name', 'like','%'.$request->product_name.'%');
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


        $brands = Brand::where('status','=','1')->orderBy('id',$orderBy)->get();
        $origins = Origin::where('status','=','1')->orderBy('id',$orderBy)->get();
        return view('admin.products.product_list')->with(compact('products','brands','origins','datas'));

    }

    public function create(){
        $brands = Brand::where('status','=','1')->orderBy('id','ASC')->get();
        $origins = Origin::where('status','=','1')->orderBy('id','ASC')->get();
        return view('admin.products.create')->with(compact('brands','origins'));;
    }
    public function store(Request $request){
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
        ],[
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
        $product->brand_id = $request->brand_id;
        $product->origin_id = $request->origin_id;
        $product->sex = $request->sex;
        $product->concentration = $request->concentration;
        $product->volume = $request->volume ;
        $product->inventor_name = $request->inventor_name;
        $product->recommended_age = $request->recommended_age ;
        $product->released_year = $request->released_year ;
        $product->incense_level = $request->incense_level ;
        $product->aroma_level = $request->aroma_level ;
        $product->price = $request->price ;
        $product->style = $request->style;
        foreach ($request->recommended_time as $time){
            $product->recommended_time .= $time.",";
        }

        $product->description = $request->description ;
        foreach ($request->thumbnails as $thumb){
            $product->thumbnail .= $thumb.",";
        }
//        $product->thumbnail = ;
        $product->status = 1;

//        dd($product);
        $product->save();
        return redirect(route('admin_product_list'));
    }

    public function edit(Request $request,$id){
        $brands = Brand::where('status','=','1')->orderBy('id','ASC')->get();
        $origins = Origin::where('status','=','1')->orderBy('id','ASC')->get();
        $product = Product::where('status','=','1')->where('id','=',$id)->first();
        return view('admin.products.edit',compact('product','brands','origins'));
    }
}
