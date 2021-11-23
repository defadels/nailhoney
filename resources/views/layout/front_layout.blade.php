
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('title','Madu Al-Hafizh')">
    <meta name="description" content="@yield('description','Supplier Madu Sumatera Terbesar')">
    <meta name="keywords" content="Madu, Hutan, Madu Ternak, Ganti Gula ke Madu">
    <meta name="author" content="Bag Kinantan">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url"         content="https://madualhafizh.id" />
    <meta property="og:type"        content="website" />
    
    <meta property="og:title"       content="@yield('title','Website Resmi Madu Al-Hafizh')" />
    <meta property="og:description" content="@yield('description','Supplier Madu Hutan Sumatera Terbesar')" />
    <meta property="og:image"       content="@yield('logo','/img/logo.png')" />
    <link rel="shortcut icon" type="image/png" href="{{asset('assets-front/images/favicon.png')}}">

    <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/gif" sizes="16x16">    

    <title>@yield('title')</title>

    <link href="{{ asset('assets-front/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/style.css') }}" rel="stylesheet">

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YD7D898YBE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YD7D898YBE');
    </script>

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- Start header -->
        @include('layout.front.menu')
        <!-- end of header -->


       @yield('content')

        <!-- start of tp-site-footer-section -->

        @include('layout.front.footer')
        
        <!-- end of tp-site-footer-section -->

        <!-- popup-quickview  -->
        <div id="popup-quickview" class="modal fade" tabindex="-1">
            <div class="modal-dialog quickview-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fi flaticon-cancel"></i></button>
                    <div class="modal-body d-flex">
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="product-single-img">
                                        <div class="modal-product">
                                            <div class="item">
                                                <img src="{{asset('assets/images/modal2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-single-content">
                                        <h5>Queen Bee Honey</h5>
                                        <h6>350.00 USD</h6>
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ultrices
                                            lectus lobortis, dolor et tempus porta, leo mi efficitur ante, in varius
                                            felis
                                            sem ut mauris. Proin volutpat lorem inorci sed vestibulum tempus. Lorem
                                            ipsum
                                            dolor sit amet, consectetur adipiscing elit. Aliquam
                                            hendrerit.
                                        </p>
                                        <div class="product-filter-item color">
                                            <div class="color-name">
                                                <span>Color :</span>
                                                <ul>
                                                    <li class="color1"><input id="1" type="radio" name="color"
                                                            value="30">
                                                        <label for="1"></label>
                                                    </li>
                                                    <li class="color2"><input id="2" type="radio" name="color"
                                                            value="30">
                                                        <label for="2"></label>
                                                    </li>
                                                    <li class="color3"><input id="3" type="radio" name="color"
                                                            value="30">
                                                        <label for="3"></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-filter-item color filter-size">
                                            <div class="color-name">
                                                <span>Weight :</span>
                                                <ul>
                                                    <li class="color"><input id="w1" type="radio" name="size"
                                                            value="30">
                                                        <label for="w1">4L</label>
                                                    </li>
                                                    <li class="color"><input id="w2" type="radio" name="size"
                                                            value="30">
                                                        <label for="w2">2L</label>
                                                    </li>
                                                    <li class="color"><input id="w3" type="radio" name="size"
                                                            value="30">
                                                        <label for="w3">500ML</label>
                                                    </li>
                                                    <li class="color"><input id="w4" type="radio" name="size"
                                                            value="30">
                                                        <label for="w4">200ML</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pro-single-btn">
                                            <div class="quantity cart-plus-minus">
                                                <input type="text" value="1">
                                                <div class="dec qtybutton"></div>
                                                <div class="inc qtybutton"></div>
                                            </div>
                                            <a href="#" class="theme-btn">Add to cart</a>
                                        </div>
                                        <div class="social-share">
                                            <span>Share with : </span>
                                            <ul class="socialLinks">
                                                <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                                                <li><a href='#'><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                                                <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                                                <li><a href='#'><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="m-shape">
                                            <img src="{{asset('assets/images/bee2.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popup-quickview -->

        <!-- Popup Subscribe Form -->
        <div id="popup-subscribe2" class="modal fade" tabindex="-1">
            <div class="modal-dialog subscribe-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fi flaticon-cancel"></i></button>
                    <div class="modal-body">
                        <div class="d-flex align-items-center">
                            <div class="modal-img d-none d-md-block">
                                <img src="{{asset('assets/images/modal.jpg')}}" alt="">
                            </div>
                            <div class="modal-subscribe flex-style">
                                <div class="subscribe-box">
                                    <h2>Subscribe to Our Newsletter</h2>
                                    <p>Received 10% Discount on Your Next Purchase!</p>
                                    <form id="mc-form" class="sform">
                                        <div class="form_msg">
                                            <label class="mt10" for="mc-email"></label>
                                        </div>
                                        <input type="email" name="email" id="mc-email" placeholder="Enter Your Email"
                                            required>
                                        <input type="submit" name="submit" value="subscribe">
                                    </form>
                                    <p class="no-padding fz-12">By submitting your email you will accept our privacy
                                        policy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup Subscribe Form -->


    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets-front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('assets-front/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('assets-front/js/script.js') }}"></script>
    <script src="{{ asset('assets-front/js/modernizr.custom.js') }}"></script>
</body>

</html>