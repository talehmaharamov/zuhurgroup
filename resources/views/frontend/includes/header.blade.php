<div class="whats-float">
    <a href="https://wa.me/{{ settings('whatsapp') }}"
       target="_blank">
        <i class="fab fa-whatsapp"></i><span>@lang('Whatsapp')<br><small>{{ settings('whatsapp') }}</small></span>
    </a>
</div>


<header class="header header-transparent header-sticky d-none d-lg-block">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="header-top-links col">
                    <ul>
                        <li><a href="tel:{{ settings('phone') }}"><i
                                    class="info-icon fa fa-phone-square"></i>{{ settings('phone') }}</a></li>
                        <li><i class="info-icon fa fa-map-marker"></i>{{ settings('address_'.app()->getLocale()) }}</li>
                    </ul>
                </div>
                <div class="col">
                    <div class="header-top-social">
                        <a href="{{ settings('facebook') }}"><i class="fa fa-facebook-square"></i></a>
                        <a href="{{ settings('instagram') }}"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="header-bottom menu-right">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 mt-20 mb-20">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img src="{{ asset('backend/images/logo.png') }}"
                                                                     style="width: 50%;" alt=""></a>
                    </div>
                </div>

                <!--Menu start-->
                <div class="col-lg-10 col-md-8 col-6 d-flex justify-content-end position-static">
                    <nav class="main-menu">
                        <ul>
                            <li class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'frontend.index') active @endif"><a href="{{ route('frontend.index') }}"><p>@lang('backend.home-page')</p>
                                </a></li>
                            {{--                            <li class="position-static"><a href="#"><span>@lang('backend.categories')</span></a>--}}
                            {{--                                <ul class="mega-menu four-column">--}}
                            {{--                                    @foreach($mainCategories as $mc)--}}
                            {{--                                        <li>--}}
                            {{--                                            <a>{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>--}}
                            {{--                                            <ul>--}}
                            {{--                                                @foreach($mc->subcategories as $mcs)--}}
                            {{--                                                    <li>--}}
                            {{--                                                        <a href="{{ route('frontend.selectedCategory',$mcs->slug) }}">{{ $mcs->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>--}}
                            {{--                                                    </li>--}}
                            {{--                                                @endforeach--}}
                            {{--                                            </ul>--}}
                            {{--                                        </li>--}}
                            {{--                                    @endforeach--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            @foreach($mainCategories as $mc)
                                <li>
                                    <a href="#"><span>{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</span></a>
                                    <ul class="sub-menu">
                                        @foreach($mc->subcategories as $mcs)
                                            <li>
                                                <a href="{{ route('frontend.selectedCategory',$mcs->slug) }}">{{ $mcs->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                            <li class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'frontend.about') active @endif"><a href="{{ route('frontend.about') }}"><p>@lang('backend.about')</p></a></li>
                            <li class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'frontend.contact-us-page') active @endif"><a href="{{ route('frontend.contact-us-page') }}"><p>@lang('backend.contact-us')</p></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-cart">
                        <a class="mini-cart" href="#"><i class="fa fa-globe"></i></a>
                        <div class="shopping-cart cart-box" style="width: max-content">
                            <div class="shop-inner">
                                <div class="header">
                                    <ul class="product-list">
                                        @foreach(active_langs() as $lang)
                                            <li>
                                                <div class="content">
                                                    <div class="inner">
                                                        <h4>
                                                            <a href="{{ route('frontend.frontLanguage',$lang->code) }}">{{ \Illuminate\Support\Str::upper($lang->code) }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-search">
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-mobile d-block d-lg-none">
    <div class="header-bottom menu-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 mt-20 mb-20">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img src="{{ asset('backend/images/logo.png') }}"
                                                                     style="width: 38%;"
                                                                     alt="@lang('seo.logo-alt')"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 col-6 d-flex justify-content-end position-static">
                    <nav class="main-menu-mobile">
                        <ul>
                            <li class="active"><a
                                    href="{{ route('frontend.index') }}"><span>@lang('backend.home-page')</span></a>
                            </li>
                            @foreach($mainCategories as $mc)
                                <li>
                                    <a><span>{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</span></a>
                                    <ul class="sub-menu">
                                        @foreach($mc->subcategories as $mcs)
                                            <li>
                                                <a href="{{ route('frontend.selectedCategory',$mc->slug) }}">{{ $mcs->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <div class="header-cart">
                        <a class="mini-cart" href="#"><i class="fa fa-shopping-bag"></i><span>3</span></a>
                        <div class="shopping-cart cart-box">
                            <div class="shop-inner">
                                <div class="header">
                                    <ul class="product-list">

                                        <!-- Start Single Product -->
                                        <li>
                                            <div class="thumb">
                                                <a href="single-product.html">
                                                    <img src="assets/images/cart/cart1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="inner">
                                                    <h4><a href="single-product.html">Bottle with Leather
                                                            Grip</a></h4>
                                                    <div class="quatity">
                                                        <span>1 ×</span>
                                                        <span>39.00</span>
                                                    </div>
                                                </div>
                                                <button class="delete-btn"><i class="fa fa-close"></i></button>
                                            </div>
                                        </li>

                                        <!-- Start Single Product -->
                                        <li>
                                            <div class="thumb">
                                                <a href="single-product.html">
                                                    <img src="assets/images/cart/cart2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="inner">
                                                    <h4><a href="single-product.html">Crystal Glass Globe Desk Lamp</a></h4>
                                                    <div class="quatity">
                                                        <span>1 ×</span>
                                                        <span>39.00</span>
                                                    </div>
                                                </div>
                                                <button class="delete-btn"><i class="fa fa-close"></i></button>
                                            </div>
                                        </li>

                                        <!-- Start Single Product -->
                                        <li>
                                            <div class="thumb">
                                                <a href="single-product.html">
                                                    <img src="assets/images/cart/cart1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="inner">
                                                    <h4><a href="single-product.html">Gold Plated Desk
                                                            Lantern Lamp</a></h4>
                                                    <div class="quatity">
                                                        <span>1 ×</span>
                                                        <span>39.00</span>
                                                    </div>
                                                </div>
                                                <button class="delete-btn brook-transition"><i class="fa fa-close"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer">
                                    <div class="total">Total: <span>225.00</span></div>
                                    <a class="cart-btn brook-transition" href="checkout.html">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-search">
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!--Menu end-->
            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->

        </div>
    </div>
</header>

{{--<header class="header-mobile d-block d-lg-none">--}}
{{--    <div class="header-bottom menu-right">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-2 col-md-4 col-6 mt-20 mb-20">--}}
{{--                    <div class="logo">--}}
{{--                        <a href="{{ route('frontend.index') }}"><img src="{{asset('backend/images/logo.png')}}"--}}
{{--                                                                     style="width: 38%" alt="@lang('seo.logo-alt')"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-10 col-md-8 col-6 d-flex justify-content-end position-static">--}}
{{--                    <div class="mean-push"></div>--}}
{{--                    <nav class="main-menu-mobile" style="display: none;">--}}
{{--                        <ul>--}}
{{--                            <li class="active"><a--}}
{{--                                    href="{{ route('frontend.index') }}"><span>@lang('backend.home-page')</span></a>--}}
{{--                            </li>--}}
{{--                            @foreach($mainCategories as $mc)--}}
{{--                                <li>--}}
{{--                                    <a><span>{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</span></a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        @foreach($mc->subcategories as $mcs)--}}
{{--                                            <li><a href="{{ route('frontend.selectedCategory',$mc->slug) }}">Portfolio--}}
{{--                                                    boxed grid</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}


{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                    <div class="header-cart">--}}
{{--                        <a class="mini-cart" href="#"><i class="fa fa-globe"></i></a>--}}
{{--                        <div class="shopping-cart cart-box" style="">--}}
{{--                            <div class="shop-inner">--}}
{{--                                <div class="header">--}}
{{--                                    <ul class="product-list">--}}
{{--                                        @foreach(active_langs() as $lang)--}}
{{--                                            <li>--}}
{{--                                                <div class="content">--}}
{{--                                                    <div class="inner">--}}
{{--                                                        <h4>--}}
{{--                                                            <a href="{{ route('frontend.frontLanguage',$lang->code) }}">{{ \Illuminate\Support\Str::upper($lang->code) }}</a>--}}
{{--                                                        </h4>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="header-search">--}}
{{--                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Menu end-->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

