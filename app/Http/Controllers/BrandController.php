<?php

namespace App\Http\Controllers;

use App\Brand;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class BrandController extends Controller
{
    public function index(Request $request){
        $numberItem = 0;
        $orderBy = "DESC";
        if ($request->has('numberItem')){
            $numberItem = $request->numberItem;
        }
        if ($request->has('orderBy')){
            $numberItem = $request->orderBy;
        }

        if ($request->has('keyword')){
            $brands = Brand::where('status','=','1')->where('name','like','%'.$request->keyword.'%')->orderBy('name',$orderBy)->paginate($numberItem);
            return view('admin.brands.brand_list',compact('brands'));
        }
        $brands = Brand::where('status','=','1')->orderBy('name',$orderBy)->paginate($numberItem);
//        dd($brands);
        return view('admin.brands.brand_list',compact('brands'));
    }

    public function search(Request $request){
        dd($request);
    }
    public function edit($slug){
        $brand = Brand::where('slug','=',$slug)->where('status','=','1')->first();
        return view('admin.brands.edit',compact('brand'));
    }
    public function update(Request $request, $id){
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->save();
        return redirect(route('admin_brand'));
    }
    public function create(){
        return view('admin.brands.create');
    }
    public function store(Request $request){
        $brand = new Brand();
        $brand->name = $request->brand_name;
//        dd(sanitize($request->brand_name));
        $brand->slug = sanitize($request->brand_name);
        if (count(Brand::where('name','=',$request->brand_name)->get())){
            return back()->withErrors('The brand have already existed !','duplicated');
        }
        $brand->status = 1;
        $brand->save();
        return redirect(route('admin_brand'));
    }
    public function delete($id){
        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->save();
        return redirect(route('admin_brand'));
    }
    public function delete_multi(Request $request){
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
        Brand::whereIn('id', $ids_array)->update(['status' => 0]);

        return response()->json(['success'=>"Products Deleted successfully."]);
//        $products_array = $request->brands;
        //dd($products_array);
        //check product con ton` tai hay khong
//
    }
}
