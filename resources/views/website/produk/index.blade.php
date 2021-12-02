@extends('layout.front_layout')

@section('title','Produk')


@section('content')
 <!-- start of breadcumb-section -->
 <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Produk</h2>
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li><span>Produk</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape-img-1"><img src="assets-front-front/images/slider/img-2.png" alt=""></div>
            <div class="hero-shape-img-2"><img src="assets-front-front/images/slider/img-3.png" alt=""></div>
        </div>
        <!-- end of tp-breadcumb-section-->

        <!-- shop-section  start-->

        <div class="shop-section">
            <div class="container">
                <div class="row">

                <!-- Filter product -->
                    <!-- <div class="col-lg-4">

                        <div class="shop-filter-wrap">
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <h2>Search</h2>
                                    <div class="shop-filter-search">
                                        <form>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Search">
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <h2>Price</h2>
                                    <ul>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                All prices
                                                <input type="radio" name="topcoat">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                $50 – $100 (1)
                                                <input type="radio" name="topcoat">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                $100 – $200 (21)
                                                <input type="radio" name="topcoat">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                $200 – $300 (13)
                                                <input type="radio" name="topcoat">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                $300 – $400 (3)
                                                <input type="radio" name="topcoat">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                $400 and more (2)
                                                <input type="radio" name="topcoat">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <h2>Size</h2>
                                    <ul>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Small Jar
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Large Jar
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Medium Jar
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Extra large Jar
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item color">
                                    <h2> Color</h2>
                                    <div class="color-name">
                                        <ul>
                                            <li class="color1"><input id="cl1" type="radio" name="col" value="30">
                                                <label for="cl1"></label>
                                            </li>
                                            <li class="color2"><input id="cl2" type="radio" name="col" value="30">
                                                <label for="cl2"></label>
                                            </li>
                                            <li class="color3"><input id="cl3" type="radio" name="col" value="30">
                                                <label for="cl3"></label>
                                            </li>
                                            <li class="color4"><input id="cl4" type="radio" name="col" value="30">
                                                <label for="cl4"></label>
                                            </li>
                                            <li class="color5"><input id="cl5" type="radio" name="col" value="30">
                                                <label for="cl5"></label>
                                            </li>
                                            <li class="color6"><input id="cl6" type="radio" name="col" value="30">
                                                <label for="cl6"></label>
                                            </li>
                                            <li class="color7"><input id="cl7" type="radio" name="col" value="30">
                                                <label for="cl7"></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <h2>Brand</h2>
                                    <ul>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Flower
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Hill
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Forest
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Queen
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- End filter product -->

                    <div class="col-lg-12">
                        <div class="shop-section-top-inner">
                            <div class="shoping-list">
                                <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="pill"
                                            data-bs-target="#grid" type="button" role="tab" aria-controls="grid"
                                            aria-selected="true"><i class="fa fa-th "></i></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="list-tab" data-bs-toggle="pill"
                                            data-bs-target="#list" type="button" role="tab" aria-controls="list"
                                            aria-selected="false"><i class="fa fa-list "></i></button>
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="shoping-product">
                                <span>Showing Products 1 - 9 Of 13 Result</span>
                            </div>
                            <div class="short-by">
                                <ul>
                                    <li>Short By :</li>
                                    <li>
                                        <select name="show">
                                            <option value="">Show 9 Items</option>
                                            <option value="">Show 18 Items</option>
                                            <option value="">Show 27 Items</option>
                                        </select>
                                    </li>
                                </ul>
                            </div> -->

                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="product-wrap">
                                    <div class="row align-items-center">
                                        @foreach($daftar_produk as $produk)
                                            <?php
                                                $links = "https://api.whatsapp.com/send?phone=6281370721854<&text=Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"."%0ASaya ingin memesan produk berikut %0A"."%0ANama produk : ".$produk->nama."%0AHarga : Rp.".$produk->harga."%0AApakah bisa diproses?";
                                            ?>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <img src="{{ Storage::url($produk->foto) }}" alt="" style="background-size: cover;">
                                                    <ul>
                                                        <li><a data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Pesan" href="{{ $links }}" target="_blank"><i
                                                                    class="fi flaticon-shopping-cart"></i></a></li>
                                                        <!-- <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i class="fi ti-eye"></i></button>
                                                        </li>
                                                        <li><a data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Add to Wishlist" href="wishlist.html"><i
                                                                    class="fi flaticon-like"></i></a></li> -->
                                                    </ul>
                                                    <!-- <div class="offer-thumb">
                                                        <span>-28%</span>
                                                    </div> -->
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-single.html" id="nama">{{$produk->nama}}</a></h3>
                                                    <div class="product-btm">
                                                        <div>
                                                            <ul>
                                                                <li id="harga">Rp.{{ number_format($produk->harga)}}</li>
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
                                                                <!-- <li><span><i class="fa fa-star" aria-hidden="true"></i></span> -->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                           
                                        @endforeach
                                       
                                        {{$daftar_produk->links()}}
                                    
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade product-list" id="list" role="tabpanel"
                                aria-labelledby="list-tab">
                                <div class="product-wrap">
                                    <div class="row align-items-center">

                                        @foreach($daftar_produk as $produk)
                                        <div class="col-xl-12 col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <img src="{{Storage::url($produk->foto)}}" alt="">
                                                    <ul>
                                                        <li><a data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Pesan" id="pesan" href=""><i
                                                                    class="fi flaticon-shopping-cart"></i></a></li>
                                                        <!-- <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i class="fi ti-eye"></i></button>
                                                        </li>
                                                        <li><a data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Add to Wishlist" href="wishlist.html"><i
                                                                    class="fi flaticon-like"></i></a></li> -->
                                                    </ul>
                                                    <!-- <div class="offer-thumb">
                                                        <span>-28%</span>
                                                    </div> -->
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-single.html" id="nama">{{$produk->nama}}</a></h3>
                                                    <div class="product-btm">
                                                        <div>
                                                            <ul>
                                                                <li id="harga">Rp.{{ number_format($produk->harga)}}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <!-- <li><span><i class="fa fa-star"
                                                                            aria-hidden="true"></i></span> -->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    {{$produk->konten}}
                                                    
                                                </div>
                                               
                                            </div>
                                        </div>
                                        @endforeach
                                        {{$daftar_produk->links()}}
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-area-end -->

@endsection


@section('page_script')
 <script>
     document.querySelector("#pesan").addEventListener("click", pesanProduk);

     function pesanProduk()
     {
         const nama_produk = document.querySelector("#nama").innerHTML;

         const harga = document.querySelector("#harga").innerHTML;

         const linkWA = 'https://api.whatsapp.com/send?phone=6281370721854<&text=';

         const formatOrder = "Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A" + "%0ASaya ingin memesan produk berikut %0A" + "%0ANama produk : " + nama_produk + "%0AHarga : " + harga + "%0AApakah bisa diproses?";

        window.open(linkWA+formatOrder);
     }
 </script>
@endsection

