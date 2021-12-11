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
            <div class="hero-shape-img-1"><img src="assets-front/images/slider/img-2.png" alt=""></div>
            <div class="hero-shape-img-2"><img src="assets-front/images/slider/img-3.png" alt=""></div>
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
                                                $links = "https://api.whatsapp.com/send?phone=6281370721854<&text=Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"."%0ASaya ingin memesan produk berikut %0A"."%0ANama produk : ".$produk->nama."%0AHarga : Rp.".number_format($produk->harga)."%0AApakah bisa diproses?";
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
                                                    <h3><a href="{{route('website.produk.detail',[$produk->id, $produk->produk_id])}}">{{$produk->nama}}</a></h3>
                                                    <div class="product-btm">
                                                        <div>
                                                            <ul>
                                                                <li>Rp.{{ number_format($produk->harga)}}</li>
                                                                <!-- <li></li> -->
                                                                
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
                                                    <?php
                                                        $links = "https://api.whatsapp.com/send?phone=6281370721854<&text=Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"."%0ASaya ingin memesan produk berikut %0A"."%0ANama produk : ".$produk->nama."%0AHarga : Rp.".number_format($produk->harga)."%0AApakah bisa diproses?";
                                                    ?>
                                                        <li><a data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Pesan" href="{{$links}}" target="_blank"><i
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
                                                    <h3><a href="{{route('website.produk.detail',$produk->id)}}" id="nama">{{$produk->nama}}</a></h3>
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
                                                    {!!$produk->konten!!}

                                                    <a href="{{ $links }}" target="_blank" class="btn btn-lg btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                     <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                     </svg> Pesan</a>
                                                     
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

