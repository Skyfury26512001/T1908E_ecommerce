@extends('layouts.master')
@section('specific_css')
    <link href="{{asset('assets/css/faq.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li>Dịch vụ</li>
                </ul>
            </div>
            <h1>Giúp đỡ và Hỗ trợ</h1>
        </div>
        <!-- /page_header -->
    {{--        <div class="search-input">--}}
    {{--            <input type="text" placeholder="Search question or article...">--}}
    {{--            <button type="submit"><i class="ti-search"></i></button>--}}
    {{--        </div>--}}
    <!-- /search-input -->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-wallet"></i>
                    <h3>Thanh toán</h3>
                    <p>Giá cả và cách thanh toán.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-user"></i>
                    <h3>Tài khoản</h3>
                    <p>Xem và chỉnh sửa tài khoản cá nhân.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-help"></i>
                    <h3>Sản phẩm</h3>
                    <p>Hỏi đáp về nước hoa.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-truck"></i>
                    <h3>Vận chuyển</h3>
                    <p>Chính sách và phương thức vận chuyển, đổi trả.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-eraser"></i>
                    <h3>Huỷ đơn hàng</h3>
                    <p>Chính sách đặt và huỷ đơn hàng.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-comments"></i>
                    <h3>Đánh giá</h3>
                    <p>Để lại đánh giá và xem các đánh giá khác.</p>
                </a>
            </div>
        </div>
        <!--/row-->
    </div>
    <div class="bg_white">
        <div class="container margin_30">
            <h5>Các chủ đề được quan tâm</h5>
            <div class="list_articles add_bottom_15 clearfix">
                <ul>
                    <li><a href="#0"><i class="ti-file"></i><strong>Tài khoản</strong> - Tôi có cần một tài khoản để đặt
                            hàng không?</a>
                    </li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Thanh toán</strong> - Được sử dụng những phương thức
                            thanh toán nào?</a>
                    </li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Sản phẩm</strong> - Hàng hóa có phải là chính hãng
                            không? Authentic không?</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Vận chuyển</strong> - Thời gian từ lúc đặt đến lúc
                            nhận sản phẩm khoảng bao lâu?</a>
                    </li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Đơn hàng</strong> - Tôi có thể thay đổi thông tin
                            hoặc huỷ đơn hàng không?</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Sản phẩm</strong> - Có được nhờ shop giữ hàng để mua
                            sau không?</a>
                    </li>
                </ul>
            </div>
            <!-- /list_articles -->
        </div>
    </div>

    {{--@section('extra-content')--}}
@endsection
