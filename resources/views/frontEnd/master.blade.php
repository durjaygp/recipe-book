<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <meta name="description" content="A description of the page">
    <meta name="robots" content="index,follow"><!-- All Search Engines -->
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->
    <meta name="author" content="{{$website->author}}"/>
    <meta name="keywords" content="{{$website->keywords}}" />
    <meta name="url" content="{{$website->url}}" />
    <meta name="google-site-verification" content="{{$website->google}}">
    <meta name="tags" content="{{$website->tags}}" />
    <meta name="description" content="{{$website->description}}" />
    <!-- Stylesheets -->
    <link href="{{asset('front')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('front')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('front')}}/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">

    <link rel="shortcut icon" href="{{asset($website->fav_icon)}}" type="image/x-icon">
    <link rel="icon" href="{{asset($website->fav_icon)}}" type="image/x-icon">

    <!-- Responsive -->
    <style>
        .text-cindy{
            color: #D6BC94!important;
        }
    </style>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('front')}}/js/respond.js"></script><![endif]-->
</head>
<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    @include('frontEnd.inc.header')
    <!--End Main Header -->

    @yield('content')

	<!-- Main Footer -->
    @include('frontEnd.inc.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="{{asset('front')}}/js/jquery.js"></script>
<script src="{{asset('front')}}/js/popper.min.js"></script>
<script src="{{asset('front')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('front')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('front')}}/js/appear.js"></script>
<script src="{{asset('front')}}/js/owl.js"></script>
<script src="{{asset('front')}}/js/wow.js"></script>
<script src="{{asset('front')}}/js/jquery-ui.js"></script>
<script src="{{asset('front')}}/js/script.js"></script>
<script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
@yield('script')
@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position:'topRight',
                message: '{{$error}}',
            });
        </script>
    @endforeach
@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position:'topRight',
            message: '{{session()->get('success')}}',
        });

    </script>
@endif

@if(session()->get('warning'))
    <script>
        iziToast.warning({
            title: '',
            position:'topRight',
            message: '{{session()->get('warning')}}',
        });
    </script>
@endif
</body>
</html>
