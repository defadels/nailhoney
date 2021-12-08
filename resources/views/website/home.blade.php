@extends('layout.front_layout')

@section('title','Home Page')


@section('content')
<!-- start preloader -->
<div class="preloader">
            <div class="inner">
                <span class="icon"><i><img src="{{asset('assets-front/images/bee.png')}}" alt=""></i></span>
            </div>

          </div>
<!-- end preloader -->

 <!-- start of hero -->
 <section class="hero hero-style-2">
            <div class="hero-slider">
                <div class="slide">
                    <img src="{{asset('/img/carousel/carousel-1.jpg')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Fresh</span> Organic <span>Honey</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Shop Now <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{asset('/img/carousel/carousel-2.jpg')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Fresh</span> Organic <span>Honey</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Shop Now <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{asset('/img/carousel/carousel-3.jpg')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Fresh</span> Organic <span>Honey</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Shop Now <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- category-area-start -->
        <section class="category-area-s2 section-padding">
            <div class="container">
                <div class="category-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="{{asset('assets-front/images/category/icon-1.png')}}" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Bersanad</a></h2>
                                    <p>Kami mampu menunjukkan asal asul produksi madu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="{{asset('assets-front/images/category/icon-2.png')}}" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Murni</a></h2>
                                    <p>Produk madu yang kami hasilkan adalah madu murni</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="{{asset('assets-front/images/category/icon-3.png')}}" alt="">
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

        
        <!-- product-area-start -->
        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Daftar <span>Produk</span></h2>
                            <p>Berikut adalah daftar produk yang kami sediakan untuk konsumen.</p>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="row align-items-center">

                    @foreach($daftar_produk as $produk)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="{{Storage::url($produk->foto)}}" alt="">
                                    <ul>
                                        <?php
                                        $links = "https://api.whatsapp.com/send?phone=6281370721854<&text=Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"."%0ASaya ingin memesan produk berikut %0A"."%0ANama produk : ".$produk->nama."%0AHarga : Rp.".number_format($produk->harga)."%0AApakah bisa diproses?";
                                        ?>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Pesan"
                                                href="{{$links}}" target="_blank"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        <!-- <li data-bs-toggle="modal" data-bs-target="#popup-quickview"><button
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                    class="fi ti-eye"></i></button></li>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Wishlist"
                                                href="wishlist.html"><i class="fi flaticon-like"></i></a></li> -->
                                    </ul>
                                    <!-- <div class="offer-thumb">
                                        <span>-28%</span>
                                    </div> -->
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-single.html">{{$produk->nama}}</a></h3>
                                    <div class="product-btm">
                                        <div>
                                            <ul>
                                                <li>Rp.{{number_format($produk->harga)}}</li>
                                                <!-- <li>$98.00</li> -->
                                            </ul>
                                        </div>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <!-- <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="view-btn">
                    <a class="theme-btn" href="{{ route('website.produk') }}">Lihat Semua <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
           
        </section>

        <!-- product-area-end -->

        <!-- offer-area-end -->
        <section class="offer-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="offer-img">
                            <img src="{{asset('assets-front/images/honey.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="offer-wrap">
                            <div class="offer-title">
                                <small>Limited Offer For Customer</small>
                                <h2>Fresh Sunflower <span>Orginal Honey Up</span> <br> To 58% Off.</h2>
                            </div>
                            <p>Cara paling mudah untuk mendapatkan madu hutan asli dan berkualitas adalah dengan
                              “melihat” siapa yang menjual madu tersebut.
                            Jika kita mengenalnya sebagai orang yang jujur dan amanah, insyaAllah, MADU
                            yang mereka jual, terjaga keasliannya. </p>
                            <a href="shop.html" class="btn theme-btn" tabindex="0">Shop Now <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- offer-area-end -->

        <!-- Flash-Sale-area-start -->
        <!-- Section daftar produk promo -->

        <!-- <section class="flash-Sale-area product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Flash <span>Sale</span> Items</h2>
                            <div class="flash-text">
                                <div class="product_timing">
                                    <div data-countdown="2021-10-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="{{asset('assets-front/images/product/1.png')}}" alt="">
                                    <ul>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Cart"
                                                href="cart.html"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview"><button
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                    class="fi ti-eye"></i></button></li>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Wishlist"
                                                href="wishlist.html"><i class="fi flaticon-like"></i></a></li>
                                    </ul>
                                    <div class="offer-thumb">
                                        <span>28% OFF</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-single.html">Manuka Honey</a></h3>
                                    <div class="product-btm">
                                        <div class="product-price">
                                            <ul>
                                                <li>$85.00</li>
                                                <li>$98.00</li>
                                            </ul>
                                        </div>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="{{asset('assets-front/images/product/8.png')}}" alt="">
                                    <ul>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Cart"
                                                href="cart.html"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview"><button
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                    class="fi ti-eye"></i></button></li>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Wishlist"
                                                href="wishlist.html"><i class="fi flaticon-like"></i></a></li>
                                    </ul>
                                    <div class="offer-thumb">
                                        <span>45% OFF</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-single.html">Mustard Flower Honey </a></h3>
                                    <div class="product-btm">
                                        <div class="product-price">
                                            <ul>
                                                <li>$95.00</li>
                                                <li>$108.00</li>
                                            </ul>
                                        </div>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="{{asset('assets-front/images/product/6.png')}}" alt="">
                                    <ul>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Cart"
                                                href="cart.html"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview"><button
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                    class="fi ti-eye"></i></button></li>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Wishlist"
                                                href="wishlist.html"><i class="fi flaticon-like"></i></a></li>
                                    </ul>
                                    <div class="offer-thumb">
                                        <span>30% OFF</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-single.html">Pure Hill Honey</a></h3>
                                    <div class="product-btm">
                                        <div class="product-price">
                                            <ul>
                                                <li>$75.00</li>
                                                <li>$88.00</li>
                                            </ul>
                                        </div>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                                <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="{{asset('assets-front/images/product/5.png')}}" alt="">
                                    <ul>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Cart"
                                                href="cart.html"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview"><button
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                    class="fi ti-eye"></i></button></li>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Wishlist"
                                                href="wishlist.html"><i class="fi flaticon-like"></i></a></li>
                                    </ul>
                                    <div class="offer-thumb">
                                        <span>50% OFF</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-single.html">Mango Flower Honey</a></h3>
                                    <div class="product-btm">
                                        <div class="product-price">
                                            <ul>
                                                <li>$155.00</li>
                                                <li>$198.00</li>
                                            </ul>
                                        </div>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Flash-Sale-area-end -->

        <!-- start tp-projects -->
        <section class="tp-projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-title mb-0">
                        <h2>Konten <span>Madu</span></h2>
                    </div>
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters projects-menu">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">Semua Konten</a></li>
                                <li><a data-filter=".flower" href="#">Flower</a></li>
                                <li><a data-filter=".hill" href="#">Hill</a></li>
                                <li><a data-filter=".forest" href="#">Forest</a></li>
                                <li><a data-filter=".queen" href="#">Queen</a></li>
                            </ul>
                        </div>
                        <div class="projects-grids gallery-container clearfix">
                            <div class="grid flower">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-1.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid hill">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-6.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid flower queen">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-2.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid hill forest queen">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-7.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid hill">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-8.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid flower forest">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-9.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid queen">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-3.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid hill">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-10.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid forest">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="{{asset('assets-front/images/projects/img-11.jpg')}}" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project.html">fresh original honey</a></h3>
                                            <p class="cat">healthy food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-btn">
                    <a class="theme-btn" href="project.html">View All <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </section>
        <!-- end tp-projects -->

        <!-- service-area-end -->
        <div class="service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-item">
                            <div class="service-icon">
                                <span><img draggable="false" src="{{ asset('assets-front/images/support/1.png') }}" alt=""></span>
                            </div>
                            <div class="service-icon-text">
                                <h2>Ongkir Murah</h2>
                                <span>Ongkos kirim dengan harga terjangkau.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-item">
                            <div class="service-icon">
                                <span><img draggable="false" src="{{asset('assets-front/images/support/2.png')}}" alt=""></span>
                            </div>
                            <div class="service-icon-text">
                                <h2>Pembayaran Mudah</h2>
                                <span>Sistem pembayaran yang memudahkan dan dijamin aman.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-item">
                            <div class="service-icon">
                                <span><img draggable="false" src="{{asset('assets-front/images/support/3.png')}}" alt=""></span>
                            </div>
                            <div class="service-icon-text">
                                <h2>Cepat Respon</h2>
                                <span>Tim cepat dalam melayani dan merespon. </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-area-end -->

        <!-- start about-section -->
        <section class="about-section section-padding p-t-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-5 col-12">
                        <div class="video-area">
                            <img src="{{asset('img/about.jpg')}}" alt>
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/bLJ8n5YGLv8" class="video-btn" data-type="iframe"
                                    tabindex="0"><i class="fi flaticon-play-button"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-12">
                        <div class="about-area">
                            <div class="about-wrap">
                                <div class="about-title">
                                    <small>Tentang Perusahaan Kami</small>
                                    <h2>Membangun yayasan <span>yang peduli</span> dengan hutan</h2>
                                </div>
                                <p>Sebagai penjaga sehat, penjaga keluarga dan penjaga alam.</p>
                                <a href="{{route('website.tentang')}}" class="btn theme-btn" tabindex="0">Lihat Selengkapnya<i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->

        <!-- testimonial-area-start -->
        <section class="testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2><span>Testimonial</span> Konsumen</h2>
                            <p>Berbagai macam testimoni dari konsumen setelah mengonsumsi <span>Madu Al-Hafizh</span> </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrap">
                    <div class="testimonial-active">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="{{asset('assets-front/images/testimonial/1.png')}}" alt="">
                                <div class="t-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    has been the industry's standard dummy text ever since the 1500s unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book has survived not has been the industry's standard consectetur adipisicing elit
                                    only five centuries the industry's standard consectetur.</p>
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
                                <img src="{{asset('assets-front/images/testimonial/3.png')}}" alt="">
                                <div class="t-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    has been the industry's standard dummy text ever since the 1500s unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book has survived not has been the industry's standard consectetur adipisicing elit
                                    only five centuries the industry's standard consectetur.</p>
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
                                <img src="{{asset('assets-front/images/testimonial/2.png')}}" alt="">
                                <div class="t-quote">
                                    <i class="fi flaticon-left-quote"></i>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    has been the industry's standard dummy text ever since the 1500s unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book has survived not has been the industry's standard consectetur adipisicing elit
                                    only five centuries the industry's standard consectetur.</p>
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
        <section class="client-area">
            <div class="container">
                <h2 class="hidden">client</h2>
                <div class="client-item">
                    <div class="client-carousel owl-carousel">
                        <img src="{{asset('assets-front/images/client/img-1.png')}}" alt="clinet">
                        <img src="{{asset('assets-front/images/client/img-2.png')}}" alt="clinet">
                        <img src="{{asset('assets-front/images/client/img-3.png')}}" alt="clinet">
                        <img src="{{asset('assets-front/images/client/img-4.png')}}" alt="clinet">
                        <img src="{{asset('assets-front/images/client/img-5.png')}}" alt="clinet">
                    </div>
                </div>
            </div>
        </section>
        <!-- client-area end -->

        <!-- blog-area-start -->
        <section class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2><span>Blog</span> Terbaru</h2>
                            <p>Artikel-artikel seputar tentang madu, manfaat madu, dan berbisnis madu. </p>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('assets-front/images/blog/img-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li><i class="ti-calendar"></i> 13 April, 2021</li>
                                        <li><i class="ti-heart"></i> 58 Million</li>
                                    </ul>
                                    <h3><a href="blog-single.html">We automatically search for andapply coupons
                                            when.</a></h3>
                                    <a href="blog-single.html" class="btn theme-btn-s2">Read more <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('assets-front/images/blog/img-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li><i class="ti-calendar"></i> 13 April, 2021</li>
                                        <li><i class="ti-heart"></i> 58 Million</li>
                                    </ul>
                                    <h3><a href="blog-single.html">How to get more traffic in your website of
                                            ecommerce.</a></h3>
                                    <a href="blog-single.html" class="btn theme-btn-s2">Read more <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('assets-front/images/blog/img-3.jpg') }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li><i class="ti-calendar"></i> 13 April, 2021</li>
                                        <li><i class="ti-heart"></i> 58 Million</li>
                                    </ul>
                                    <h3><a href="blog-single.html">25 Rules and regulation to be successful in your
                                            business.</a></h3>
                                    <a href="blog-single.html" class="btn theme-btn-s2">Read more <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Flash-Sale-area-end -->
@endsection