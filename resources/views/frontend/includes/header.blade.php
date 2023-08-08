<header class="header header-transparent header-sticky d-none d-lg-block">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">

                <!--Links start-->
                <div class="header-top-links col">
                    <ul>
                        <li><i class="info-icon fa fa-phone-square"></i>(102) 6666 8888</li>
                        <li><i class="info-icon fa fa-map-marker"></i>183 Donato Parkways, CA, USA</li>
                    </ul>
                </div>
                <!--Links end-->

                <!--Socail start-->
                <div class="col">
                    <div class="header-top-social">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <!--Socail end-->
            </div>

        </div>
    </div>
    <div class="header-bottom menu-right">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 mt-20 mb-20">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img src="{{ asset('backend/images/logo.png') }}" style="width: 50%;" alt=""></a>
                    </div>
                </div>

                <!--Menu start-->
                <div class="col-lg-10 col-md-8 col-6 d-flex justify-content-end position-static">
                    <nav class="main-menu">
                        <ul>
                            <li class="active"><a href="{{ route('frontend.index') }}"><p>@lang('backend.home-page')</p></a></li>
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
                            <li><a href="#"><span>{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</span></a>
                                <ul class="sub-menu">
                                    @foreach($mc->subcategories as $mcs)
                                    <li><a href="{{ route('frontend.selectedCategory',$mcs->slug) }}">{{ $mcs->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <li><a href="{{ route('frontend.about') }}"><p>@lang('backend.about')</p></a></li>
                            <li><a href="{{ route('frontend.contact-us-page') }}"><p>@lang('backend.contact-us')</p></a></li>
                        </ul>
                    </nav>
                    <div class="header-search">
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
