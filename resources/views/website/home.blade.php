@extends('layout.front_layout')

@section('title','Nailhoney.id | Beranda')


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
                                    <h2><span>Satu Madu</span> Menjaga <span>Alam</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Pesan Sekarang <i
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
                                    <h2><span>Family</span> Sehat <span>Dengan Madu</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Pesan Sekarang <i
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
                                    <h2><span>Ragam</span> Manfaat <span>Madu</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Lihat Selengkapnya <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{asset('/img/carousel/carousel-4.jpg')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Ganti Gula</span> Dengan <span>Madu</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="shop.html" class="btn theme-btn">Lihat Selengkapnya <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- opening-section -->

        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Selamat Datang di Website <span>Nailhoney</span></h2>
                            <p>Saat membaca setiap kata dalam situs web ini, Anda akan mulai menemukan solusi 
                                bagaimana menjaga kesehatan keluarga, dan ikut berkampanye dalam melestarikan alam semesta. 
                            </p>
                            <div class="p-4">
                                <img src="{{asset('/img/product.jpg')}}" alt="">
                            </div>
                            
                            <p>
                                Madu Hutan Al-Hafizh bersumber dari hutan Sumatera, dihasilkan oleh lebah Apis Dorsata
                                dan Apis Mellifera, yang membangun koloni-koloni di pohon Sialang dan pohon Akasia. 
                                Memiliki rasa bervariasi dan berwarna lebih tua. Pohon Sialang adalah sebutan dari masyarakat
                                untuk pohon Menggeris. Pohon yang memiliki tinggi hingga 88 meter.
                            </p>
                            <p>
                                Madu ini adalah Madu Multiflora karena lebah Apis Dorsata menghisap nektar bunga yang ada di 
                                dalam hutan tanpa memilih. Lebah jenis Apis Dorsata adalah jenis lebah liar yang sampai saat ini
                                belum bisa diternakkan, sehingga dapat dikatakan bahwa madu hutan murni ini adalah madu yang di dapat
                                dari alam liar bukan dari hasil peternakan lebah.
                            </p>
                            <h2>Kandungan di Dalam <span>Madu</span></h2>
                            <p>
                                Madu memiliki kandungan vitamin A, B Complex, C, E, H, Kalium, Magnesium, Klorin, Mineral,
                                Sufur, dan Fosfor. Antibiotik di dalam madu mampu membunuh kuman di dalam tubuh.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- end-of-opening-section -->

        <!-- category-area-start -->
        <section class="category-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="category-wrap">
                            <div class="category-title">
                                <h2>Menjaga 3 Tagline</h2>
                                <p>Kami senantiasa menjaga 3 tagline sebagai nilai, garansi dan amanah kami
                                    sehingga madu yang sampai ditangan mitra dan konsumen berkualitas serta terjaga kemurniannya.</p>
                            </div>
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="{{asset('assets-front/images/category/icon-1.png')}}" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Bersanad</a></h2>
                                    <p>Kami mampu menunjukkan asal asul produksi madu.</p>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="{{asset('assets-front/images/category/icon-2.png')}}" alt="">
                                </div>
                                <div class="category-content">
                                    <h2><a href="product.html">Murni</a></h2>
                                    <p>Produk madu yang kami hasilkan adalah madu 100% murni.</p>
                                </div>
                            </div>
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
                    <div class="col-lg-6">
                        <div class="category-img">
                            <img src="{{asset('/img/tagline image.jpg')}}" alt="">
                            <div class="ct-img"><img src="{{asset('assets-front/images/category/icon-4.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- category-area-end -->

        <!-- category-area-start -->
        <!-- <section class="category-area-s2 section-padding">
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
                                    <p>Produk madu yang kami hasilkan adalah madu murni.</p>
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

        </section> -->
        <!-- category-area-end -->

        
        <!-- product-area-start -->
        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Daftar <span>Produk</span></h2>
                            <p>Berikut adalah daftar produk yang kami sediakan untuk konsumen dan mitra.</p>
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
                                    <h3><a href="{{route('website.produk.detail',$produk->id)}}">{{$produk->nama}}</a></h3>
                                    <div class="product-btm">
                                        <div>
                                            <ul>
                                                <li>Rp.{{number_format($produk->harga)}}</li>
                                                <!-- <li>$98.00</li> -->
                                                <li>
                                                     <br>
                                                     <a href="{{ $links }}" class="btn btn-lg btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                     <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                     </svg> Pesan</a>
                                                </li>
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
                            <img src="{{asset('/img/500gr.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="offer-wrap">
                            <div class="offer-title">
                                <small>Cara Mendapatkan</small>
                                <h2>Madu <span>Murni</span> <br> Dan Asli.</h2>
                            </div>
                            <p>Cara paling mudah untuk mendapatkan madu hutan asli dan berkualitas adalah dengan
                              “melihat” siapa yang menjual madu tersebut.
                            Jika kita mengenalnya sebagai orang yang jujur dan amanah, insyaAllah, MADU
                            yang mereka jual, terjaga keasliannya. </p>
                            <a href="{{route('website.produk')}}" class="btn theme-btn" tabindex="0">Dapatkan Sekarang <i
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
                        @foreach($daftar_blog as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ Storage::url($blog->thumbnail) }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li><i class="ti-calendar"></i> {!!$blog->created_at->format('M, d-Y')!!} </li>
                                        <!-- <li><i class="ti-heart"></i> 58 Million</li> -->
                                    </ul>
                                    <h3><a href="{{route('website.blog.detail',$blog->id)}}">{{$blog->judul}}</a></h3>
                                    <a href="{{route('website.blog.detail',$blog->id)}}" class="btn theme-btn-s2">Lihat selengkapnya <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach()
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Flash-Sale-area-end -->

        <!-- call-to-action-start -->
        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Apakah Anda Berminat? <span>Klik Tombol ini</span></h2>
                            <p>Tunggu apalagi? Segera berikan kesehatan yang berkualitas untuk diri Anda, keluarga,
                                dan ikut bergabung berkontribusi dalam menjaga kelestarian alam. 
                            </p>
                            <div class="p-4">
                                <a href="" target="_blank" class="btn btn-lg btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg> Klik Untuk Pesan</a>
                            </div>  
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- call-to-action-end -->
@endsection