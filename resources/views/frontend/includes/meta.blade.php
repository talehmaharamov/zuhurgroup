<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') @lang('backend.zuhur')</title>
@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'frontend.selectedContent' )
    @yield('meta')
@else
    <meta name="description" content="heleki testi">
@endif
