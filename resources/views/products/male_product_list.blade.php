@extends('layouts.master')
@section('specific_css')
    <link href="{{asset('assets/css/listing.css')}}" rel="stylesheet">
@endsection
@section('specific_js')
    <script src="{{asset('assets/js/sticky_sidebar.min.js')}}"></script>
    <script src="{{asset('assets/js/specific_listing.min.js')}}"></script>
@endsection
@section('content')
    <main>
        <div class="container margin_30">
            <div class="row">
                <aside class="col-lg-3" id="sidebar_fixed">
                    <div class="filter_col">
                        <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                        <div class="filter_type version_2">
                            <h4><a href="#filter_1" data-toggle="collapse" class="opened">Categories</a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <li>
                                        <label class="container_check">Nam <small>12</small>
                                            <input type="radio" value="Nam">

                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Nữ <small>12</small>
                                            <input type="radio" value="Nữ">

                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Phi giới tính <small>12</small>
                                            <input type="radio" value="Phi giới tính">

                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- /filter_type -->
                        </div>
                        <!-- /filter_type -->
                        <div class="filter_type version_2">
                            <h4><a href="#filter_2" data-toggle="collapse" class="closed">Origins</a></h4>

                            <div class="collapse" id="filter_2">
                                <ul>
                                    @foreach($origins as $origin)
{{--                                        {{dd($origin->products)}}--}}
                                        <li>
                                            <label class="container_check">{{$origin->name}} <small>{{count($origin->products)}}</small>
                                                <input type="checkbox" name="origin">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->

                        <div class="filter_type version_2">
                            <h4><a href="#filter_3" data-toggle="collapse" class="closed">Brands</a></h4>

                            <div class="collapse" id="filter_3">
                                <ul>
                                    @foreach($brands as $brand)
{{--                                        {{dd($brand->products)}}--}}
                                        <li>
                                            <label class="container_check">{{$brand->brand_name}} <small>{{count($brand->products)}}</small>
                                                <input type="checkbox" name="brand">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->
{{--                        <div class="filter_type version_2">--}}
{{--                            <h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>--}}
{{--                            <div class="collapse" id="filter_4">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <label class="container_check">$0 — $50<small>11</small>--}}
{{--                                            <input type="checkbox">--}}
{{--                                            <span class="checkmark"></span>--}}
{{--                                        </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="container_check">$50 — $100<small>08</small>--}}
{{--                                            <input type="checkbox">--}}
{{--                                            <span class="checkmark"></span>--}}
{{--                                        </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="container_check">$100 — $150<small>05</small>--}}
{{--                                            <input type="checkbox">--}}
{{--                                            <span class="checkmark"></span>--}}
{{--                                        </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="container_check">$150 — $200<small>18</small>--}}
{{--                                            <input type="checkbox">--}}
{{--                                            <span class="checkmark"></span>--}}
{{--                                        </label>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- /filter_type -->
                        <div class="buttons">
                            <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
                        </div>
                    </div>
                </aside>
                <!-- /col -->
                <div class="col-lg-9">
                    <div class="top_banner">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                            <div class="container pl-lg-5">
                                {{--	                            <div class="breadcrumbs">--}}
                                {{--	                                <ul>--}}
                                {{--	                                    <li><a href="#">Home</a></li>--}}
                                {{--	                                    <li><a href="#">Category</a></li>--}}
                                {{--	                                    <li>Page active</li>--}}
                                {{--	                                </ul>--}}
                                {{--	                            </div>--}}
                                <h1>Shoes - Grid listing</h1>
                            </div>
                        </div>
                        <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
                    </div>
                    <!-- /top_banner -->
                    <div id="stick_here"></div>
                    <div class="toolbox elemento_stick add_bottom_30">

                    </div>
                    <!-- /toolbox -->
                    <div class="row small-gutters">
                        @foreach($products as $product)
                            <div class="col-6 col-md-4">
                                <div class="grid_item">
                                    <figure>
                                        <a href="{{route('product_detail',$product->slug)}}">
                                            <img class="img-fluid lazy"
                                                 src="{{$product->firstThumbnail}}"
                                                 data-src="{{$product->firstThumbnail}}" alt="">
                                        </a>
                                    </figure>
                                    <a href="{{route('product_detail',$product->slug)}}">
                                        <h3>{{$product->name}}</h3>
                                    </a>
                                    <div class="price_box">
                                        <span class="new_price">{{$product->formatPrice}}</span>
                                    </div>
                                </div>
                                <!-- /grid_item -->
                            </div>
                    @endforeach
                    <!-- /col -->
                    </div>
                    <!-- /row -->
                    <div class="pagination__wrapper">
                        {{ $products->links() }}
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection