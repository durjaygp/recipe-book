<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('back')}}/assets/images/logos/favicon.ico" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('back')}}/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('back')}}/assets/css/style.min.css" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('back')}}/assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('back')}}/assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('backEnd.inc.sidebar')
    <!-- Sidebar End -->
    <!-- Main wrapper -->
    <div class="body-wrapper">
        <!-- Header Start -->
        @include('backEnd.inc.header')
        <!-- Header End -->
      @yield('content')
        <!-- container-fluid over -->
    </div>
    <div class="dark-transparent sidebartoggler"></div>
</div>

<!-- Import Js Files -->
<script src="{{asset('back')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('back')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{asset('back')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- core files -->
<script src="{{asset('back')}}/assets/js/app.min.js"></script>
<script src="{{asset('back')}}/assets/js/app.init.js"></script>
<script src="{{asset('back')}}/assets/js/app-style-switcher.js"></script>
<script src="{{asset('back')}}/assets/js/sidebarmenu.js"></script>
<script src="{{asset('back')}}/assets/js/custom.js"></script>
<script src="{{asset('back')}}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{asset('back')}}/assets/js/dashboard2.js"></script>
<script src="{{asset('back')}}/assets/js/apps/contact.js"></script>
</body>
</html>
