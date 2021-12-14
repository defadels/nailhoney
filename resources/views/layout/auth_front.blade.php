
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themepresss">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

    <title>@yield('title')</title>

    <link href="{{asset('assets-front/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets-front/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span class="icon"><i><img src="assets/images/bee.png" alt=""></i></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- login-area start -->
       @yield('content')
        <!-- login-area end -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('assets-front/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets-front/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins for this template -->
    <script src="{{asset('assets-front/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets-front/js/jquery-plugin-collection.js')}}"></script>

    <!-- Custom script for this template -->
    <script src="{{asset('assets-front/js/script.js')}}"></script>
    <script src="{{asset('assets-front/js/modernizr.custom.js')}}"></script>
</body>

</html>