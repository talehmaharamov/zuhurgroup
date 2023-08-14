@extends('master.frontend')
@section('title',__('title.content-index').' | ')
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
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}"><img
                                        src="{{ asset($content->photo) }}"
                                        alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}"></a>
                            </div>
                            <div class="blog-content">
                                <h2>
                                    <a href="{{ route('frontend.selectedContent',$content->slug) }}">{{ $content->translate(app()->getLocale())->name ?? '' }}</a>
                                </h2>
                                <ul class="meta">
                                    <li><i class="fa fa-clock-o"></i>{{ $content->created_at->format('d.m.Y')  }}</li>
                                    <li><i class="fa fa-folder-open"></i><a
                                            href="#">{{ $category->translate(app()->getLocale())->name ?? '' }}</a></li>
                                </ul>
                                <p>{!! $category->translate(app()->getLocale())->short_description ?? '' !!}</p>
                                <a class="read-more-btn"
                                   href="{{ route('frontend.selectedContent',$content->slug) }}">@lang('backend.read-more')
                                    <i
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
                            @foreach($contents->links() as $paginatePage)
                                <li class="@if($loop->first) active @endif"><a href="#">{{$paginatePage}}</a></li>
                            @endforeach
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!--Pagination End-->
                </div>
            </div>
        </div>
    </div>
@endsection
