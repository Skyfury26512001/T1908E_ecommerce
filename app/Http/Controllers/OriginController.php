<?php

namespace App\Http\Controllers;

use App\Origin;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class OriginController extends Controller
{
        public function index(Request $request){
        $numberItem = 5;
        $orderBy = "ASC";
        if ($request->has('numberItem')){
            $numberItem = $request->numberItem;
        }
        if ($request->has('orderBy')){
            $numberItem = $request->orderBy;
        }

        if ($request->has('keyword')){
//            dd(Origin::where('status','=','1')->where('name','like','%'.$request->keyword.'%')->orderBy('id',$orderBy)->paginate($numberItem)->appends($request->only('keyword')));
            $origins = Origin::where('status','=','1')->where('name','like','%'.$request->keyword.'%')->orderBy('id',$orderBy)->paginate($numberItem)->appends($request->only('keyword'));

            return view('admin.origins.origin_list',compact('origins'));
        }
        $origins = Origin::where('status','=','1')->orderBy('id',$orderBy)->paginate($numberItem);
//        dd($brands);

        return view('admin.origins.origin_list',compact('origins'));
    }

    public function search(Request $request){
        dd($request);
    }
    public function edit($slug){
        $brand = Origin::where('slug','=',$slug)->where('status','=','1')->first();
        return view('admin.brands.edit',compact('brand'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'thumbnail' => 'required',
        ],[
            'name.required' => 'Tên hãng là cần thiết',
            'detail.required' => 'Cần thêm mô tả hãng',
            'thumbnail.required' => 'Bắt buộc phải có ảnh đại diện',
        ]);

        $brand = Origin::find($id);
        $brand->name = $request->name;
        $brand->save();
        return redirect(route('admin_brand'));
    }
    public function create(){
        return view('admin.brands.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'thumbnail' => 'required',
        ],[
            'name.required' => 'Tên hãng là cần thiết',
            'detail.required' => 'Cần thêm mô tả hãng',
            'thumbnail.required' => 'Bắt buộc phải có ảnh đại diện',
        ]);

        $brand = new Origin();

        $brand->brand_name = $request->name;
        $brand->brand_description = $request->detail;
//        dd(sanitize($request->brand_name));
        $brand->brand_thumbnail = $request->thumbnail;
        $brand->slug = sanitize($brand->brand_name);
        if (count(Origin::where('brand_name','=',$request->brand_name)->get())){
            return back()->withErrors('The brand have already existed !','duplicated');
        }
        $brand->status = 1;
//        dd($brand);
        $brand->save();
        return redirect(route('admin_brand'));
    }
    public function delete($id){
        $brand = Origin::find($id);
        $brand->status = 0;
        $brand->save();
        return redirect(route('admin_brand'));
    }
    public function delete_multi(Request $request){
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
        Origin::whereIn('id', $ids_array)->update(['status' => 0]);

        return response()->json(['success'=>"Products Deleted successfully."]);
//        $products_array = $request->brands;
        //dd($products_array);
        //check product con ton` tai hay khong
//
    }
}
