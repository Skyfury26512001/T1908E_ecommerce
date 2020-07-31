@extends('layouts.master')
@section('specific_css')
    <link href="{{asset('assets/css/product_page.css')}}" rel="stylesheet">
@endsection
@section('specific_js')
    <script src="{{asset('assets/js/carousel_with_thumbs.js')}}"></script>
    <script src="{{asset('assets/js/read_more_read_less.js')}}"></script>
@endsection
@section('content')
    <div id="page">
        <main>
            <div class="container margin_30">
                <div class="countdown_inner">-20% This offer ends in
                    <div data-countdown="2019/05/15" class="countdown"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="all">
                            <div class="slider">
                                <div class="owl-carousel owl-theme main">
                                    <div style="background-image: url({{asset('assets/img/products/shoes/1.jpg')}});"
                                         class="item-box"><img src="{{$productsInfo->thumbnail}}" alt="Sauvage"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/2.jpg')}});"
                                         class="item-box"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/3.jpg')}});"
                                         class="item-box"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/4.jpg')}});"
                                         class="item-box"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/5.jpg')}});"
                                         class="item-box"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/6.jpg')}});"
                                         class="item-box"></div>
                                </div>
                                <div class="left nonl"><i class="ti-angle-left"></i></div>
                                <div class="right"><i class="ti-angle-right"></i></div>
                            </div>
                            <div class="slider-two">
                                <div class="owl-carousel owl-theme thumbs">
                                    <div style="background-image: url({{asset('assets/img/products/shoes/1.jpg')}});"
                                         class="item active"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/2.jpg')}});"
                                         class="item"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/3.jpg')}});"
                                         class="item"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/4.jpg')}});"
                                         class="item"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/5.jpg')}});"
                                         class="item"></div>
                                    <div style="background-image: url({{asset('assets/img/products/shoes/6.jpg')}});"
                                         class="item"></div>
                                </div>
                                <div class="left-t nonl-t"></div>
                                <div class="right-t"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Category</a></li>
                                <li>Page active</li>
                            </ul>
                        </div>
                        <!-- /page_header -->
                        <div class="prod_info">
                            <h1>{{$productsInfo->name}}</h1>
                            <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
                            <h6>{{$productsInfo->concentration}}
                                <span>{{$productsInfo->sex}}</span>
                                <p>Thương hiệu: <a href="#">{{$productsInfo->brand->brand_name}}</a></p>
                            </h6>
                            <div class="productID">Code:</div>
                            <div class="prod_options">
                                <div class="row">
                                    <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Dung tích</strong> <a
                                            href="#0"
                                            data-toggle="modal"
                                            data-target="#size-modal"><i
                                                class="ti-help-alt"></i></a></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="custom-select-form">
                                            <select class="wide">
                                                <option value="" selected>10ml</option>
                                                <option value="">50ml</option>
                                                <option value=" ">100ml</option>
                                                <option value=" ">100ml Tester</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Số lượng</strong></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="numbers-row">
                                            <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="price_main"><span
                                            class="new_price">{{$productsInfo->ValueName}}</span><span
                                            class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="btn_add_to_cart"><a href="#0" class="btn_1">Thêm vào giỏ</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- /prod_info -->
                        <div class="product_actions">
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-control-shuffle"></i><span>Add to Compare</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /product_actions -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->

            <div class="tabs_product">
                <div class="container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /tabs_product -->
            <div class="tab_content_wrapper">
                <div class="container">
                    <div class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false"
                                       aria-controls="collapse-A">
                                        Description
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <h3><u>Tổng quan</u></h3>
                                            <div>
                                                <p>
                                                    {!! $productsInfo->description !!}
                                                </p>
                                                <a href="javascript:void(0);" class="readmore-btn">Read More</a>
                                            </div>

                                        </div>
                                        <div class="col-lg-5">
                                            <h3><u>Thông tin chi tiết</u></h3>
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td><strong>Xuất xứ</strong></td>
                                                        <td>{{$productsInfo->origin->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Độ tuổi khuyên dùng</strong></td>
                                                        <td>{{$productsInfo->recommended_age}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Năm phát hành</strong></td>
                                                        <td>{{$productsInfo->released_year}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Nhà sáng chế</strong></td>
                                                        <td>{{$productsInfo->inventor_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Độ lựu hương</strong></td>
                                                        <td>{{$productsInfo->incense_level}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Độ toả hương</strong></td>
                                                        <td>{{$productsInfo->aroma_level}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Phong cách</strong></td>
                                                        <td>{{$productsInfo->style}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Thời điểm khuyên dùng</strong></td>
                                                        <td>{{$productsInfo->recommended_time}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /table-responsive -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /TAB A -->
                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                       aria-controls="collapse-B">
                                        Reviews
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <div class="review_content">
                                                <div class="clearfix add_bottom_10">
                                                    <span class="rating"><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i><i
                                                            class="icon-star"></i><em>5.0/5.0</em></span>
                                                    <em>Published 54 minutes ago</em>
                                                </div>
                                                <h4>"Commpletely satisfied"</h4>
                                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod
                                                    scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus
                                                    te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent
                                                    fuisset ut. Viderer petentium cu his.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="review_content">
                                                <div class="clearfix add_bottom_10">
                                                    <span class="rating"><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star empty"></i><i
                                                            class="icon-star empty"></i><em>4.0/5.0</em></span>
                                                    <em>Published 1 day ago</em>
                                                </div>
                                                <h4>"Always the best"</h4>
                                                <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat
                                                    legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut.
                                                    Viderer petentium cu his.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <div class="review_content">
                                                <div class="clearfix add_bottom_10">
                                                    <span class="rating"><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>
                                                    <em>Published 3 days ago</em>
                                                </div>
                                                <h4>"Outstanding"</h4>
                                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod
                                                    scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus
                                                    te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent
                                                    fuisset ut. Viderer petentium cu his.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="review_content">
                                                <div class="clearfix add_bottom_10">
                                                    <span class="rating"><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i><i
                                                            class="icon-star"></i><em>5.0/5.0</em></span>
                                                    <em>Published 4 days ago</em>
                                                </div>
                                                <h4>"Excellent"</h4>
                                                <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum
                                                    ea, ius essent fuisset ut. Viderer petentium cu his.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a>
                                    </p>
                                </div>
                                <!-- /card-body -->
                            </div>
                        </div>
                        <!-- /tab B -->
                    </div>
                    <!-- /tab-content -->
                </div>
                <!-- /container -->
            </div>
            <!-- /tab_content_wrapper -->

            <div class="container margin_60_35">
                <div class="main_title">
                    <h2>Related</h2>
                    <span>Products</span>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="owl-carousel owl-theme products_carousel">
                    <div class="item">
                        <div class="grid_item">
                            <span class="ribbon new">New</span>
                            <figure>
                                <a href="product-detail-1.html">
                                    <img class="owl-lazy"
                                         src="{{asset('assets/img/products/product_placeholder_square_medium.jpg')}}"
                                         data-src="assets/img/products/shoes/4.jpg" alt="">
                                </a>
                            </figure>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="product-detail-1.html">
                                <h3>ACG React Terra</h3>
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
                    <!-- /item -->
                    <div class="item">
                        <div class="grid_item">
                            <span class="ribbon new">New</span>
                            <figure>
                                <a href="product-detail-1.html">
                                    <img class="owl-lazy"
                                         src="{{asset('assets/img/products/product_placeholder_square_medium.jpg')}}"
                                         data-src="assets/img/products/shoes/5.jpg" alt="">
                                </a>
                            </figure>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="product-detail-1.html">
                                <h3>Air Zoom Alpha</h3>
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
                    <!-- /item -->
                    <div class="item">
                        <div class="grid_item">
                            <span class="ribbon hot">Hot</span>
                            <figure>
                                <a href="product-detail-1.html">
                                    <img class="owl-lazy"
                                         src="{{asset('assets/img/products/product_placeholder_square_medium.jpg')}}"
                                         data-src="assets/img/products/shoes/8.jpg" alt="">
                                </a>
                            </figure>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="product-detail-1.html">
                                <h3>Air Color 720</h3>
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
                    <!-- /item -->
                    <div class="item">
                        <div class="grid_item">
                            <span class="ribbon off">-30%</span>
                            <figure>
                                <a href="product-detail-1.html">
                                    <img class="owl-lazy"
                                         src="{{asset('assets/img/products/product_placeholder_square_medium.jpg')}}"
                                         data-src="assets/img/products/shoes/2.jpg" alt="">
                                </a>
                            </figure>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="product-detail-1.html">
                                <h3>Okwahn II</h3>
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
                    <!-- /item -->
                    <div class="item">
                        <div class="grid_item">
                            <span class="ribbon off">-50%</span>
                            <figure>
                                <a href="product-detail-1.html">
                                    <img class="owl-lazy"
                                         src="{{asset('assets/img/products/product_placeholder_square_medium.jpg')}}"
                                         data-src="assets/img/products/shoes/3.jpg" alt="">
                                </a>
                            </figure>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="product-detail-1.html">
                                <h3>Air Wildwood ACG</h3>
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
                    <!-- /item -->
                </div>
                <!-- /products_carousel -->
            </div>
            <!-- /container -->

            <div class="feat">
                <div class="container">
                    <ul>
                        <li>
                            <div class="box">
                                <i class="ti-gift"></i>
                                <div class="justify-content-center">
                                    <h3>Free Shipping</h3>
                                    <p>For all oders over $99</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <i class="ti-wallet"></i>
                                <div class="justify-content-center">
                                    <h3>Secure Payment</h3>
                                    <p>100% secure payment</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <i class="ti-headphone-alt"></i>
                                <div class="justify-content-center">
                                    <h3>24/7 Support</h3>
                                    <p>Online top support</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/feat-->

        </main>
        <!-- /main -->

        <footer class="revealed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_1">Về Wanderlust</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_1">
                            <ul>
                                <li><a href="about.html">Giới thiệu về Wanderlust</a></li>
                                <li><a href="">Diễn đàn chuyên gia nước hoa</a></li>
                                <li><a href="account.html">Tài khoản cá nhân</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_2">Dịch vụ</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_2">
                            <ul>
                                <li><a href="help.html">Các câu hỏi thường gặp</a></li>
                                {{-- Frequently Asked Questions - FAQ --}}
                                <li><a href="">Hướng dẫn đặt hàng</a></li>
                                <li><a href="">Phương thức vận chuyển</a></li>
                                <li><a href="">Phương thức thanh toán</a></li>
                                <li><a href="">Chính sách giá cả</a></li>
                                <li><a href="">Chính sách đổi trả</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_3">Liên hệ</h3>
                        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                            <ul>
                                <li><i class="ti-home"></i>Số 8 Tôn Thất Thuyết<br>Hà Nội - Việt Nam</li>
                                <li><i class="ti-headphone-alt"></i>+84 123-456-789</li>
                                <li><i class="ti-email"></i><a href="#0">t1908e@fpt.edu.vn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_4">Có gì mới</h3>
                        <h5 class="keep-contact">Đăng kí để nhận thông tin khuyến mãi mới nhất!!</h5>
                        <div class="collapse dont-collapse-sm" id="collapse_4">
                            <div id="newsletter">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter"
                                           class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="follow_us">
                                <h5>Theo dõi ủng hộ Wanderlust</h5>
                                <ul>
                                    <li><a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="assets/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="assets/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="assets/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="assets/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <ul class="footer-selector clearfix">
                            <li>
                                <div class="styled-select lang-selector">
                                    <select>
                                        <option value="Vietnamese" selected>Vietnamese</option>
                                        <option value="French">French</option>
                                        <option value="English">English</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="styled-select currency-selector">
                                    <select>
                                        <option value="VND" selected>VND</option>
                                        <option value="Euro">Euro</option>
                                    </select>
                                </div>
                            </li>
                            <li><img
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/img/cards_all.svg" alt="" width="198" height="30" class="lazy">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2020 Wanderlust</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <div id="toTop"></div><!-- Back to top button -->

    <div class="top_panel">
        <div class="container header_panel">
            <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
            <label>1 product added to cart</label>
        </div>
        <!-- /header_panel -->
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="item_panel">
                            <figure>
                                <img src="{{asset('assets/img/products/product_placeholder_square_small.jpg')}}"
                                     data-src="assets/img/products/shoes/1.jpg" class="lazy" alt="">
                            </figure>
                            <h4>1x Armor Air X Fear</h4>
                            <div class="price_panel"><span class="new_price">$148.00</span><span
                                    class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
                        </div>
                    </div>
                    <div class="col-md-5 btn_panel">
                        <a href="cart.html" class="btn_1 outline">View cart</a> <a href="checkout.html" class="btn_1">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->
        <div class="container related">
            <h4>Who bought this product also bought</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="item_panel">
                        <a href="#0">
                            <figure>
                                <img src="{{asset('assets/img/products/product_placeholder_square_small.jpg')}}"
                                     data-src="assets/img/products/shoes/2.jpg" alt="" class="lazy">
                            </figure>
                        </a>
                        <a href="#0">
                            <h5>Armor Okwahn II</h5>
                        </a>
                        <div class="price_panel"><span class="new_price">$90.00</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item_panel">
                        <a href="#0">
                            <figure>
                                <img src="{{asset('assets/img/products/product_placeholder_square_small.jpg')}}"
                                     data-src="assets/img/products/shoes/3.jpg" alt="" class="lazy">
                            </figure>
                        </a>
                        <a href="#0">
                            <h5>Armor Air Wildwood ACG</h5>
                        </a>
                        <div class="price_panel"><span class="new_price">$75.00</span><span
                                class="percentage">-20%</span> <span class="old_price">$155.00</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item_panel">
                        <a href="#0">
                            <figure>
                                <img src="{{asset('assets/img/products/product_placeholder_square_small.jpg')}}"
                                     data-src="assets/img/products/shoes/4.jpg" alt="" class="lazy">
                            </figure>
                        </a>
                        <a href="#0">
                            <h5>Armor ACG React Terra</h5>
                        </a>
                        <div class="price_panel"><span class="new_price">$110.00</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /related -->
    </div>
    <!-- /add_cart_panel -->

    <!-- Size modal -->
    <!-- Size modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="size-modal" id="size-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Size guide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, et velit propriae invenire mea, ad nam alia intellegat. Aperiam
                        mediocrem rationibus nec te. Tation persecuti accommodare pro te. Vis et augue legere, vel
                        labitur habemus ocurreret ex.</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm sizes">
                            <tbody>
                            <tr>
                                <th scope="row">US Sizes</th>
                                <td>6</td>
                                <td>6,5</td>
                                <td>7</td>
                                <td>7,5</td>
                                <td>8</td>
                                <td>8,5</td>
                                <td>9</td>
                                <td>9,5</td>
                                <td>10</td>
                                <td>10,5</td>
                            </tr>
                            <tr>
                                <th scope="row">Euro Sizes</th>
                                <td>39</td>
                                <td>39</td>
                                <td>40</td>
                                <td>40-41</td>
                                <td>41</td>
                                <td>41-42</td>
                                <td>42</td>
                                <td>42-43</td>
                                <td>43</td>
                                <td>43-44</td>
                            </tr>
                            <tr>
                                <th scope="row">UK Sizes</th>
                                <td>5,5</td>
                                <td>6</td>
                                <td>6,5</td>
                                <td>7</td>
                                <td>7,5</td>
                                <td>8</td>
                                <td>8,5</td>
                                <td>9</td>
                                <td>9,5</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Inches</th>
                                <td>9.25"</td>
                                <td>9.5"</td>
                                <td>9.625"</td>
                                <td>9.75"</td>
                                <td>9.9375"</td>
                                <td>10.125"</td>
                                <td>10.25"</td>
                                <td>10.5"</td>
                                <td>10.625"</td>
                                <td>10.75"</td>
                            </tr>
                            <tr>
                                <th scope="row">CM</th>
                                <td>23,5</td>
                                <td>24,1</td>
                                <td>24,4</td>
                                <td>24,8</td>
                                <td>25,4</td>
                                <td>25,7</td>
                                <td>26</td>
                                <td>26,7</td>
                                <td>27</td>
                                <td>27,3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /table -->
                </div>
            </div>
        </div>
    </div>
@endsection

