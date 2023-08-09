@extends('master.frontend')
@section('front')
    <div class="breadcrumb-section section bg-image pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45"
         data-bg="{{asset('frontend/images/bg/bt-bg.png')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="breadcrumb-title">
                        <h2>{{ $category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                        <li>{{ $category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div
        class="blog-grid-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row">
                @foreach($category->content as $content)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="single-blog.html"><img src="{{ asset($content->photo) }}"
                                                                alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}"></a>
                            </div>
                            <div class="blog-content">
                                <h2><a href="single-blog.html">{{ $content->translate(app()->getLocale())->name ?? '' }}</a></h2>
                                <ul class="meta">
                                    <li><i class="fa fa-clock-o"></i>{{ $content->created_at->format('d.m.Y')  }}</li>
                                    <li><i class="fa fa-folder-open"></i><a href="#">{{ $category->translate(app()->getLocale())->name ?? '' }}</a></li>
                                </ul>
                                <p>The UK arm of French contractor Bouygues saw its turnover increase but pre-tax losses
                                    slumped to £78m …</p>
                                <a class="read-more-btn" href="single-blog.html">@lang('backend.read-more')<i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <!--Pagination Start-->
                    <div class="page-pagination">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!--Pagination End-->
                </div>
            </div>
        </div>
    </div>
@endsection
