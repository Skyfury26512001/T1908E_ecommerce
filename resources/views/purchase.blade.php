@extends('layouts.master')
@section('specific_css')
    <link href="{{asset('assets/css/account.css')}}" rel="stylesheet">
@endsection
@section('specific_js')
    <script src="{{asset('assets/js/custome_select.js')}}"></script>
@endsection
@section('content')
    <div class="container margin_30">
        <div class="row">
            <div class="col-md-2">
                <div class="all">
                    <div class="user-page-brief">
                        <div class="user-page-brief__right">
                            <div class="user-page-brief__username">tlhoang1211</div>
                            <div><a class="user-page-brief__edit" href="/user/account/profile">
                                    <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                         style="margin-right: 4px;">
                                        <path
                                            d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48"
                                            fill="#9B9B9B" fill-rule="evenodd"></path>
                                    </svg>
                                    Sửa hồ sơ</a></div>
                        </div>
                    </div>
                    <div class="userpage-sidebar-menu">
                        <div class="stardust-dropdown stardust-dropdown--open">
                            <div class="stardust-dropdown__item-header">
                                <a class="userpage-sidebar-menu-entry"
                                   href="/user/account/profile">
                                    <div class="userpage-sidebar-menu-entry__icon"
                                         style="background-color: rgb(255, 193, 7);">
                                        <svg class="wanderlust-svg-icon user-page-sidebar-icon icon-headshot"
                                             enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0">
                                            <g>
                                                <circle cx="7.5" cy="4.5" fill="none" r="3.8"
                                                        stroke-miterlimit="10"></circle>
                                                <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none"
                                                      stroke-linecap="round" stroke-miterlimit="10"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="userpage-sidebar-menu-entry__text">Tài khoản của tôi</div>
                                </a></div>
                            <div class="stardust-dropdown__item-body stardust-dropdown__item-body--open">
                                <div class="userpage-sidebar-menu__subsection">
                                    <a class="_17BcjA _1EUbVp"
                                       href="account/profile"><span
                                            class="_2ilxaJ">Hồ sơ</span>
                                    </a>
                                    <a class="_17BcjA"
                                       href="account/payment"><span
                                            class="_2ilxaJ">Ngân hàng</span>
                                    </a>
                                    <a class="_17BcjA"
                                       href="account/address"><span
                                            class="_2ilxaJ">Địa chỉ</span>
                                    </a>
                                    <a class="_17BcjA"
                                       href="/account/password"><span
                                            class="_2ilxaJ">Đổi mật khẩu</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="userpage-sidebar-menu-entry" href="/user/purchase/">
                            <div class="userpage-sidebar-menu-entry__icon" style="background-color: #3a87ad;">
                                <svg class="wanderlust-svg-icon user-page-sidebar-icon "
                                     enable-background="new 0 0 15 15"
                                     viewBox="0 0 15 15" x="0" y="0" style="fill: rgb(255, 255, 255);">
                                    <g>
                                        <rect fill="none" height="10" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" width="8" x="4.5" y="1.5"></rect>
                                        <polyline fill="none" points="2.5 1.5 2.5 13.5 12.5 13.5" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" x1="6.5" x2="10.5" y1="4" y2="4"></line>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" x1="6.5" x2="10.5" y1="6.5" y2="6.5"></line>
                                        <line fill="none" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" x1="6.5" x2="10.5" y1="9" y2="9"></line>
                                    </g>
                                </svg>
                            </div>
                            <div class="userpage-sidebar-menu-entry__text">Đơn Mua</div>
                        </a>
                        <div class="stardust-dropdown">
                            <div class="stardust-dropdown__item-header"><a class="userpage-sidebar-menu-entry"
                                                                           href="/user/notifications/">
                                    <div class="userpage-sidebar-menu-entry__icon"
                                         style="background-color: rgb(238, 77, 45);">
                                        <svg class="wanderlust-svg-icon user-page-sidebar-icon "
                                             enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0">
                                            <g>
                                                <path d="m12 10.2 1.5 2h-12l1.5-2v-7.4c0-.5.5-1 1-1h7c .6 0 1 .5 1 1z"
                                                      fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10"></path>
                                                <path d="m6 2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5" fill="none"
                                                      stroke-miterlimit="10"></path>
                                                <path d="m5.8 13.5c.4.6 1 1 1.8 1s1.4-.4 1.8-1z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="userpage-sidebar-menu-entry__text">Thông báo</div>
                                </a></div>
                            <div class="stardust-dropdown__item-body">
                                <div class="userpage-sidebar-menu__subsection">
                                    <a class="_17BcjA"
                                       href="/user/notifications/order"><span
                                            class="_2ilxaJ">Cập nhật đơn hàng</span></a>
                                    <a class="_17BcjA"
                                       href="/user/notifications/promotion"><span
                                            class="_2ilxaJ">Khuyến mãi</span></a>
                                    <a class="_17BcjA"
                                       href="/user/notifications/flashsale"><span
                                            class="_2ilxaJ">Flash Sale của Shop</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">

            </div>
        </div>
    </div>
@endsection
