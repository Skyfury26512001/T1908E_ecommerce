@extends('layouts.master')
@section('specific_css')
    <link href="{{asset('assets/css/account.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/product_page.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container margin_30">
        <div class="row">
            <div class="col-md-2">
                <div class="all">
                    <div class="userpage-sidebar">
                        <div class="user-page-brief"><a class="user-page-brief__avatar"
                                                        href="/user/account/profile">
                                <div class="shopee-avatar">
                                    <div class="shopee-avatar__placeholder">
                                        <svg class="shopee-svg-icon icon-headshot" enable-background="new 0 0 15 15"
                                             viewBox="0 0 15 15" x="0" y="0">
                                            <g>
                                                <circle cx="7.5" cy="4.5" fill="none" r="3.8"
                                                        stroke-miterlimit="10"></circle>
                                                <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none"
                                                      stroke-linecap="round" stroke-miterlimit="10"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="shopee-avatar__img"
                                         src="https://cf.shopee.vn/file/1175c70b4f33b1984508f93b952dc3e1_tn"></div>
                            </a>
                            <div class="user-page-brief__right">
                                <div class="user-page-brief__username">tlhoang1211</div>
                                <div><a class="user-page-brief__edit" href="/user/account/profile">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg" style="margin-right: 4px;">
                                            <path
                                                d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48"
                                                fill="#9B9B9B" fill-rule="evenodd"></path>
                                        </svg>
                                        Sửa hồ sơ</a></div>
                            </div>
                        </div>
                        <div class="userpage-sidebar-menu">
                            <div class="stardust-dropdown stardust-dropdown--open">
                                <div class="stardust-dropdown__item-header"><a class="userpage-sidebar-menu-entry"
                                                                               href="/user/account/profile">
                                        <div class="userpage-sidebar-menu-entry__icon"
                                             style="background-color: rgb(255, 193, 7);">
                                            <svg class="shopee-svg-icon user-page-sidebar-icon icon-headshot"
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
                                <div class="stardust-dropdown__item-body stardust-dropdown__item-body--open"
                                     style="opacity: 1;">
                                    <div class="userpage-sidebar-menu__subsection"><a class="_17BcjA _1EUbVp"
                                                                                      href="/user/account/profile"><span
                                                class="_2ilxaJ">Hồ sơ</span></a><a class="_17BcjA"
                                                                                   href="/user/account/payment"><span
                                                class="_2ilxaJ">Ngân hàng</span></a><a class="_17BcjA"
                                                                                       href="/user/account/address"><span
                                                class="_2ilxaJ">Địa chỉ</span></a><a class="_17BcjA"
                                                                                     href="/user/account/password"><span
                                                class="_2ilxaJ">Thêm mật khẩu</span></a></div>
                                </div>
                            </div>
                            <a class="userpage-sidebar-menu-entry" href="/user/purchase/">
                                <div class="userpage-sidebar-menu-entry__icon"
                                     style="background-color: rgb(68, 181, 255);">
                                    <svg class="shopee-svg-icon user-page-sidebar-icon "
                                         enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                         style="fill: rgb(255, 255, 255);">
                                        <g>
                                            <rect fill="none" height="10" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-miterlimit="10" width="8" x="4.5"
                                                  y="1.5"></rect>
                                            <polyline fill="none" points="2.5 1.5 2.5 13.5 12.5 13.5"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10"></polyline>
                                            <line fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-miterlimit="10" x1="6.5" x2="10.5" y1="4" y2="4"></line>
                                            <line fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-miterlimit="10" x1="6.5" x2="10.5" y1="6.5"
                                                  y2="6.5"></line>
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
                                            <svg class="shopee-svg-icon user-page-sidebar-icon "
                                                 enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0">
                                                <g>
                                                    <path
                                                        d="m12 10.2 1.5 2h-12l1.5-2v-7.4c0-.5.5-1 1-1h7c .6 0 1 .5 1 1z"
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
                                <div class="stardust-dropdown__item-body" style="opacity: 0;">
                                    <div class="userpage-sidebar-menu__subsection"><a class="_17BcjA"
                                                                                      href="/user/notifications/order"><span
                                                class="_2ilxaJ">Cập nhật đơn hàng</span></a><a class="_17BcjA"
                                                                                               href="/user/notifications/promotion"><span
                                                class="_2ilxaJ">Khuyến mãi</span></a><a class="_17BcjA"
                                                                                        href="/user/notifications/activity"><span
                                                class="_2ilxaJ">Hoạt động</span></a><a class="_17BcjA"
                                                                                       href="/user/notifications/flashsale"><span
                                                class="_2ilxaJ">Flash Sale của Shop</span></a><a class="_17BcjA"
                                                                                                 href="/user/notifications/ads"><span
                                                class="_2ilxaJ">Đấu Thầu Từ Khóa</span></a><a class="_17BcjA"
                                                                                              href="/user/notifications/wallet"><span
                                                class="_2ilxaJ">Cập nhật Ví</span></a><a class="_17BcjA"
                                                                                         href="/user/notifications/shopee"><span
                                                class="_2ilxaJ">Cập nhật Shopee</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="col-md-10">
                <div class="my-account-section">
                    <div class="my-account-section__header">
                        <div class="my-account-section__header-left">
                            <div class="my-account-section__header-title">Hồ sơ của tôi</div>
                            <div class="my-account-section__header-subtitle">Quản lý thông tin hồ sơ để
                                bảo mật tài khoản
                            </div>
                        </div>
                    </div>
                    <div class="my-account-profile">
                        <div class="my-account-profile__left">
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Tên đăng nhập</label>
                                    </div>
                                    <div class="input-with-label__content">
                                        <div class="my-account__inline-container">
                                            <div class="my-account__input-text">tlhoang1211</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Tên</label></div>
                                    <div class="input-with-label__content">
                                        <div class="input-with-validator-wrapper">
                                            <div class="input-with-validator"><input type="text"
                                                                                     placeholder=""
                                                                                     value="Hoàng Trần">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Email</label></div>
                                    <div class="input-with-label__content">
                                        <div class="my-account__inline-container">
                                            <div class="my-account__input-text">tl****@gmail.com</div>
                                            <button
                                                class="my-account__no-background-button my-account-profile__change-button">
                                                Thay đổi
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Số điện thoại</label>
                                    </div>
                                    <div class="input-with-label__content">
                                        <div class="my-account__inline-container">
                                            <div class="my-account__input-text">*********99</div>
                                            <button
                                                class="my-account__no-background-button my-account-profile__change-button">
                                                Thay đổi
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Tên Shop</label></div>
                                    <div class="input-with-label__content">
                                        <div class="input-with-validator-wrapper">
                                            <div class="input-with-validator"><input type="text"
                                                                                     placeholder=""
                                                                                     value="tlhoang1211">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Giới tính</label></div>
                                    <div class="input-with-label__content">
                                        <div class="my-account-profile__gender">
                                            <div class="stardust-radio-group">
                                                <div class="stardust-radio stardust-radio--checked">
                                                    <div
                                                        class="stardust-radio-button stardust-radio-button--checked">
                                                        <div
                                                            class="stardust-radio-button__outer-circle">
                                                            <div
                                                                class="stardust-radio-button__inner-circle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="stardust-radio__content">
                                                        <div class="stardust-radio__label">Nam</div>
                                                    </div>
                                                </div>
                                                <div class="stardust-radio">
                                                    <div class="stardust-radio-button">
                                                        <div
                                                            class="stardust-radio-button__outer-circle">
                                                            <div
                                                                class="stardust-radio-button__inner-circle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="stardust-radio__content">
                                                        <div class="stardust-radio__label">Nữ</div>
                                                    </div>
                                                </div>
                                                <div class="stardust-radio">
                                                    <div class="stardust-radio-button">
                                                        <div
                                                            class="stardust-radio-button__outer-circle">
                                                            <div
                                                                class="stardust-radio-button__inner-circle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="stardust-radio__content">
                                                        <div class="stardust-radio__label">Khác</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-with-label">
                                <div class="input-with-label__wrapper">
                                    <div class="input-with-label__label"><label>Ngày sinh</label></div>
                                    <div class="input-with-label__content">
                                        <div class="_2AC_Jd">
                                            <div class="shopee-dropdown shopee-dropdown--has-selected">
                                                <div
                                                    class="shopee-dropdown__entry shopee-dropdown__entry--selected">
                                                    <span>12</span>
                                                    <svg class="shopee-svg-icon icon-arrow-down"
                                                         enable-background="new 0 0 11 11"
                                                         viewBox="0 0 11 11" x="0" y="0">
                                                        <g>
                                                            <path
                                                                d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="shopee-dropdown shopee-dropdown--has-selected">
                                                <div
                                                    class="shopee-dropdown__entry shopee-dropdown__entry--selected">
                                                    <span>Tháng 11</span>
                                                    <svg class="shopee-svg-icon icon-arrow-down"
                                                         enable-background="new 0 0 11 11"
                                                         viewBox="0 0 11 11" x="0" y="0">
                                                        <g>
                                                            <path
                                                                d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="shopee-dropdown shopee-dropdown--has-selected">
                                                <div
                                                    class="shopee-dropdown__entry shopee-dropdown__entry--selected">
                                                    <span>1999</span>
                                                    <svg class="shopee-svg-icon icon-arrow-down"
                                                         enable-background="new 0 0 11 11"
                                                         viewBox="0 0 11 11" x="0" y="0">
                                                        <g>
                                                            <path
                                                                d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-account-page__submit">
                                <button type="button" class="btn btn-solid-primary btn--m btn--inline"
                                        aria-disabled="false">Lưu
                                </button>
                            </div>
                        </div>
                        <div class="my-account-profile__right">
                            <div class="avatar-uploader">
                                <div class="avatar-uploader__avatar">
                                    <div class="avatar-uploader__avatar-image"
                                         style="background-image: url(&quot;https://cf.shopee.vn/file/1175c70b4f33b1984508f93b952dc3e1_tn&quot;);"></div>
                                </div>
                                <input class="avatar-uploader__file-input" type="file"
                                       accept=".jpg,.jpeg,.png">
                                <button type="button" class="btn btn-light btn--m btn--inline">Chọn
                                    ảnh
                                </button>
                                <div class="avatar-uploader__text-container">
                                    <div class="avatar-uploader__text">Dụng lượng file tối đa 1 MB</div>
                                    <div class="avatar-uploader__text">Định dạng:.JPEG, .PNG</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
