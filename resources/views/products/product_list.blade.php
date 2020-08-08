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
                            <h4><a href="#filter_1" data-toggle="collapse" class="opened">Nước hoa</a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <li>
                                        <label class="container_check">Nam <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Nữ <small>24</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Phi giới tính <small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- /filter_type -->
                        </div>
                        <!-- /filter_type -->
                        <div class="filter_type version_2">
                            <h4><a href="#filter_2" data-toggle="collapse" class="opened">Nhóm</a></h4>
                            <div class="collapse show" id="filter_2">
                                <ul>
                                    <li>
                                        <label class="container_check">Nước hoa thanh mát <small>06</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Nước hoa nồng ấm <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->
                        <div class="filter_type version_2">
                            <h4><a href="#filter_3" data-toggle="collapse" class="closed">Thương hiệu</a></h4>
                            <div class="collapse" id="filter_3">
                                <ul>
                                    <li>
                                        <label class="container_check">Christian Dior <small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Chanel <small>08</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Creed <small>05</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Giorgio Armani <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Valentino <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Hermes <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Gucci <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Le Labo <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Narciso Rodriguez <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->
                        <div class="filter_type version_2">
                            <h4><a href="#filter_4" data-toggle="collapse" class="closed">Giá</a></h4>
                            <div class="collapse" id="filter_4">
                                <ul>
                                    <li>
                                        <label class="container_check">Dưới 1tr<small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">1tr — 1tr5<small>08</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">1tr5 — 2tr<small>05</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">trên 2tr<small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->
                        <div class="buttons">
                            <a href="#0" class="btn_1">Lọc</a> <a href="#0" class="btn_1 gray">Cài lại</a>
                        </div>
                    </div>
                </aside>
                <!-- /col -->
                <div class="col-lg-9">
                    <div class="top_banner">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                            <div class="container pl-lg-5">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="/">Trang chủ</a></li>
                                        <li><a href="/product_list">Danh sách sản phẩm</a></li>
                                    </ul>
                                </div>
                                <h1>Nước hoa</h1>
                            </div>
                        </div>
                        <img
                            src="https://res.cloudinary.com/vernom/image/upload/c_scale,h_450,w_1200/v1596895362/perfume_project/product_list/top_banner_nqdcfl.jpg"
                            class="img-fluid" alt="">
                    </div>
                    <!-- /top_banner -->
                    <div id="stick_here"></div>
                    <div class="toolbox elemento_stick add_bottom_30">
                        <div class="container">
                            <ul class="clearfix">
                                <li>
                                    <div class="sort_select">
                                        <select name="sort" id="sort">
                                            <option value="popularity" selected="selected">Sắp xếp theo mức độ phổ
                                                biến
                                            </option>
                                            <option value="rating">Sắp xếp theo xếp hạng trung bình</option>
                                            <option value="date">Sắp xếp theo thời gian ra mắt</option>
                                            <option value="price">Sắp xếp theo giá: thấp đến cao</option>
                                            <option value="price-desc">Sắp xếp theo giá: cao đến thấp</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <a href="/product_list"><i class="ti-view-grid"></i></a>
                                    <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
                                </li>
                                <li>
                                    <a href="#0" class="open_filters">
                                        <i class="ti-filter"></i><span>Lọc</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /toolbox -->
                    <div class="row small-gutters">
                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon off">-30%</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/1.jpg" alt="">
                                    </a>
                                    <div data-countdown="2019/05/15" class="countdown"></div>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Air x Fear</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$48.00</span>
                                    <span class="old_price">$60.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon off">-30%</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/2.jpg" alt="">
                                    </a>
                                    <div data-countdown="2019/05/10" class="countdown"></div>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Okwahn II</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$90.00</span>
                                    <span class="old_price">$170.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon off">-50%</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/3.jpg" alt="">
                                    </a>
                                    <div data-countdown="2019/05/21" class="countdown"></div>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Air Wildwood ACG</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$75.00</span>
                                    <span class="old_price">$155.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon new">New</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/4.jpg" alt="">
                                    </a>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor ACG React Terra</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$110.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon new">New</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/5.jpg" alt="">
                                    </a>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Air Zoom Alpha</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$140.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon new">New</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/6.jpg" alt="">
                                    </a>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Air Alpha</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$130.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon hot">Hot</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/7.jpg" alt="">
                                    </a>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Air 98</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$115.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon hot">Hot</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/8.jpg" alt="">
                                    </a>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor Air 720</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$120.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-4">
                            <div class="grid_item">
                                <span class="ribbon hot">Hot</span>
                                <figure>
                                    <a href="product-detail-1.html">
                                        <img class="img-fluid lazy"
                                             src="img/products/product_placeholder_square_medium.jpg"
                                             data-src="assets/img/products/shoes/9.jpg" alt="">
                                    </a>
                                </figure>
                                <a href="product-detail-1.html">
                                    <h3>Armor 720</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">$100.00</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to favorites"><i
                                                class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to compare"><i
                                                class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                           title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                    <div class="pagination__wrapper">
                        <ul class="pagination">
                            <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                            <li>
                                <a href="#0" class="active">1</a>
                            </li>
                            <li>
                                <a href="#0">2</a>
                            </li>
                            <li>
                                <a href="#0">3</a>
                            </li>
                            <li>
                                <a href="#0">4</a>
                            </li>
                            <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                        </ul>
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
