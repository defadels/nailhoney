@extends('layout.front_layout')

@section('title', 'Tentang')

@section('page_style')
<link href="assets-front/css/odometer-theme-default.css" rel="stylesheet">
@endsection

@section('content')
 <!-- start of breadcumb-section -->
 <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Tentang Kami</h2>
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li><span>Tentang</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape-img-1"><img src="assets-front/images/slider/img-2.png" alt=""></div>
            <div class="hero-shape-img-2"><img src="assets-front/images/slider/img-3.png" alt=""></div>
        </div>
        <!-- end of tp-breadcumb-section-->


        <!-- start about-section -->
        <section class="about-section section-padding p-t-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-5 col-12">
                        <div class="video-area">
                            <img src="{{asset('img/about.jpg')}}" alt>
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/Z54bL6kjyOI" class="video-btn" data-type="iframe"
                                    tabindex="0"><i class="fi flaticon-play-button"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-12">
                        <div class="about-area">
                            <div class="about-wrap">
                                <div class="about-title">
                                    <small>Tentang Perusahaan Kami</small>
                                    <h2>Membangun yayasan <span>yang peduli </span> dengan hutan.</h2>
                                </div>
                                <p>Sebagai penjaga sehat, penjaga keluarga dan penjaga alam.</p>
                                <!-- <a href="about.html" class="btn theme-btn" tabindex="0">More About<i
                                        class="fa fa-angle-double-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->

        <!-- category-area-start -->
        <section class="category-area-s2 style-2 section-padding">
            <div class="container">
                <div class="category-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="assets-front/images/category/icon-1.png" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Bersanad</a></h2>
                                    <p>Kami mampu menunjukkan asal asul produksi madu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="assets-front/images/category/icon-2.png" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Murni</a></h2>
                                    <p>Produk madu yang kami hasilkan adalah madu murni.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="assets-front/images/category/icon-3.png" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Bergaransi</a></h2>
                                    <p>Refill Madu memberikan garansi kepada seluruh mitra dan konsumen
                                        yang mampu membukti bahwa madu yang kami produksi palsu dengan
                                        bukti uji lab, maka kami akan memberikan garansi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-area-end -->

        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Our Expart <span>Team</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry has been the industry's standard consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids team-slider owl-carousel">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets-front/images/team/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>Chris Fletcher</h4>
                                    <p>Ceo Beximo</p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>                                
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets-front/images/team/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>Ema Aliana</h4>
                                    <p>Marketing Manager</p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>                                
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets-front/images/team/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>John Clyne</h4>
                                    <p>Marketing Officer</p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>                                
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets-front/images/team/img-4.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4>Lily Jameson</h4>
                                    <p>Marketing Manager</p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->

        <!-- start tp-fun-fact-section -->
        <section class="tp-fun-fact-section section-padding pt0">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="tp-fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="1500">00</span>+</h3>
                                    <p>Client Satisfaction</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="25">00</span>+</h3>
                                    <p>New Project</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="36">00</span></h3>
                                    <p>Latest Product</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="55">00</span>+</h3>
                                    <p>Award Winning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end tp-fun-fact-section -->

        <!-- testimonial-area-start -->
        <section class="testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Client <span>Testimonial</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the
                                industry's standard consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrap">
                    <div class="testimonial-active">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="assets-front/images/testimonial/1.png" alt="">
                                <div class="t-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    has been the industry's standard dummy text ever since the 1500s unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book has survived not has been the industry's standard consectetur adipisicing elit
                                    only five centuries.</p>
                                <div class="testimonial-author">
                                    <h3>Rachel Matthews</h3>
                                    <span>CEO, Deixfes</span>
                                </div>
                                <div class="t-content-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="assets-front/images/testimonial/3.png" alt="">
                                <div class="t-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    has been the industry's standard dummy text ever since the 1500s unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book has survived not has been the industry's standard consectetur adipisicing elit
                                    only five centuries.</p>
                                <div class="testimonial-author">
                                    <h3>David Warner</h3>
                                    <span>CEO, TBR</span>
                                </div>
                                <div class="t-content-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="assets-front/images/testimonial/2.png" alt="">
                                <div class="t-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    has been the industry's standard dummy text ever since the 1500s unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book has survived not has been the industry's standard consectetur adipisicing elit
                                    only five centuries.</p>
                                <div class="testimonial-author">
                                    <h3>Ken Williamson</h3>
                                    <span>CEO, Bexim</span>
                                </div>
                                <div class="t-content-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial-area-end -->

        <!-- client-area start -->
        <section class="client-area s2">
            <div class="container">
                <h2 class="hidden">client</h2>
                <div class="client-item">
                    <div class="client-carousel owl-carousel">
                        <img src="assets-front/images/client/img-1.png" alt="clinet">
                        <img src="assets-front/images/client/img-2.png" alt="clinet">
                        <img src="assets-front/images/client/img-3.png" alt="clinet">
                        <img src="assets-front/images/client/img-4.png" alt="clinet">
                        <img src="assets-front/images/client/img-5.png" alt="clinet">
                    </div>
                </div>
            </div>
        </section>
        <!-- client-area end -->
@endsection