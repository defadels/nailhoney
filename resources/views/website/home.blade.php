@extends('layout.front_layout')

@section('title','Nailhoney.id | Beranda')

@section('page-style')
  <style>
      .span-white{
          color: yellow;
      }
  </style>
@endsection

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
                    <img src="{{asset('/img/carousel/carousel-1.webp')}}" alt class="slider-bg">
                    <div class="container"> 
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2 style="color: white;"><span class="span-white">Satu Madu</span> Menjaga <span class="span-white">Alam</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="#daftar-produk" class="btn theme-btn">Pesan Sekarang <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <picture>
                        <img src="{{asset('/img/carousel/carousel-2.webp')}}" alt class="slider-bg">
                    </picture>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Family</span> Sehat <span>Dengan Madu</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="{{ route('website.produk') }}" class="btn theme-btn">Pesan Sekarang <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{asset('/img/carousel/carousel-3.webp')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Ragam</span> Manfaat <span>Madu</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="{{route('website.blog.manfaat-madu')}}" class="btn theme-btn">Lihat Selengkapnya <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{asset('/img/carousel/carousel-4.webp')}}" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-5 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Ganti Gula</span> Dengan <span>Madu</span></h2>
                                </div>
                                <div class="btns">
                                    <a href="" class="btn theme-btn">Lihat Selengkapnya <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- offer-area-end -->
        <section class="offer-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="offer-img">
                            <img src="{{asset('/img/welcome.webp')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="offer-wrap">
                            <div class="offer-title">
                                
                                <h2>Selamat Datang di Website <span>Nailhoney</span></h2>
                            </div>
                            <p class="fs-4">Solusi untuk Diabetes Melitus, Sakit Maag, Kanker, dan Menyehatkan Keluarga</p>
                            <a href="{{route('website.produk')}}" class="btn theme-btn" tabindex="0">Dapatkan Sekarang <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer-area-end -->

        <!-- opening-section -->

        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">

                            <h2>Madu Al-Hafizh<span> Premium</span></h2>

                            <div class="p-4">
                                <img src="{{asset('/img/product.webp')}}" alt="">
                            </div>
                            
                            <p>
                                Madu Hutan Al-Hafizh Premium bersumber dari hutan Sumatera, dihasilkan oleh lebah Apis Dorsata
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

                            <!-- <a href="#daftar-produk" class="btn btn-lg btn-primary">Lihat Produk</a> -->
                            <a href="#daftar-produk" class="theme-btn">&rarr; Lihat Produk &larr;</a>

                            <br>
                            <br>
                            <h2>Madu Al-Hafizh<span> Akasia</span></h2>
                            <div class="p-4">
                                <img src="{{asset('img/product-2.webp')}}" alt="Foto Madu Akasia">
                            </div>
                            <p>
                            Madu Al-Hafizh Akasia secara luas dianggap sebagai salah satu jenis madu terbaik di dunia. Madu akasia, seperti kebanyakan
                            jenis madu organik khusus lainnya, murni berasal dari nektar bunga pohon akasia
                            </p>

                            <p>
                            Madu Al-Hafizh Akasia merupakan madu organik murni yang belum diproses, dipanaskan, atau dipasteurisasi dengan cara apa pun. Jenis madu ini sangat
                            baik untuk ditambahkan pada beragam kuliner, dan juga dapat digunakan untuk beberapa tujuan pengobatan, karena kaya akan nutrisi dan antioksidan.
                            </p>

                            <br>
                            <h2>Kandungan Dalam<span> Madu</span></h2>
                            <p>
                                Madu memiliki kandungan vitamin A, B Complex, C, E, H, Kalium, Magnesium, Klorin, Mineral,
                                Sufur, dan Fosfor. Antibiotik di dalam madu mampu membunuh kuman di dalam tubuh.
                            </p>
                            <br>
                            <a href="#daftar-produk" class="theme-btn">&rarr; Dapatkan Sekarang &larr;</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- end-of-opening-section -->
        
        <!-- offer-area-end -->
        <section class="about-section section-padding p-t-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-5 col-12">
                        <div class="video-area">
                            <img src="{{asset('img/about-3.webp')}}" alt>
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/gYYkVgV3YeY" class="video-btn" data-type="iframe"
                                    tabindex="0"><i class="fi flaticon-play-button"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-12">
                        <div class="about-area">
                            <div class="about-wrap">
                                <div class="about-title">
                                    <!-- <small>Cara Mendapatkan</small> -->
                                <h2>Madu Al-Hafizh <span>Sangat Cocok</span> Untuk</h2>
                                </div>
                                <ol class="list-group">
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 1. Penyembuhan Diabetes Melitus</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 2. Penyembuhan Sakit Maag</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 3. Obat Luka Lambung</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 4. Penyubur Kandungan</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 5. Perawatan Kulit</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 6. Pengobatan Kanker</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 7. Pengobatan Hipotensi</li>
                                <li class="list-group-item fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg> 8. Pengobatan Asam Urat</li>
                                <li class="list-group-item fw-bold">dan lain-lain</li>
                            </ol>
                            <br>
                            <a href="#daftar-produk" class="theme-btn">&rarr; Lihat Produk &larr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- offer-area-end -->

        <!-- category-area-start -->
        <section class="category-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="category-wrap">
                            <div class="category-title">
                                <h2>Menjaga 3 <span>Values</span></h2>
                                <p>Kami senantiasa menjaga 3 values (nilai) sebagai nilai, garansi dan amanah kami
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
                            <img src="{{asset('/img/tagline image.webp')}}" alt="">
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

        <!-- foto-produk-carousel-start -->
        <section class="client-area">
            <div class="container">
                <h2 class="hidden">client</h2>
                <div class="client-item">
                    <div class="client-carousel owl-carousel">
                        @foreach($foto_produk_premium as $foto)
                        <img src="{{asset(Storage::url($foto->foto))}}" alt="clinet">
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- foto-produk-carousel-end -->

          <!-- benefit-of-product-section-start -->

          <section class="blog-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-title">
                                <h2>Keunggulan Produk <span>Madu Akasia</span></h2>
                                <img src="{{asset('img/product-4.jpg')}}" alt="Akasia">
                            </div>
    
                            <div class="p-3">
                                
                            <h5>1. Kaya Akan Antioksidan</h5>
                            <p>
                            Manfaat madu akasia yang pertama adalah kaya akan kandungan antioksidan.
                            Madu akasia memasok banyak antioksidan penting yang dapat berkontribusi 
                            pada kesehatan. Antioksidan melindungi sel-sel tubuh dari kerusakan yang
                            disebabkan oleh radikal bebas. Seiring waktu, kerusakan akibat radikal
                            bebas dapat menyebabkan penyakit. 
                            </p>
                            
                            <br>
                            <h5>2. Bantu Turunkan Berat Badan</h5>
                            <p>
                            Manfaat madu akasia yang kedua untuk membantu menurunkan berat badan.
                            Banyak orang mengonsumsi madu akasia untuk membantu upaya penurunan berat badan.
                            </p>
                             
                            <br>
                            <h5>3. Miliki Sifat Antibakteri Alami</h5>
                            <p>
                            Manfaat madu akasia yang ketiga adalah memiliki sifat antibakteri alami.
                            Banyaknya kemampuan penyembuhan madu akasia dikaitkan dengan aktivitas
                            antibakterinya. Madu mengandung komponen yang dibutuhkan untuk memproduksi
                            dan secara perlahan melepaskan sejumlah kecil hidrogen peroksida.
                            </p>
                            <br>
                            <h5>4. Baik untuk Perawatan Kulit</h5>
                            <p>
                            Manfaat madu akasia yang keempat sebagai agen perawatan kulit.
                            Pasokan mineral yang kaya yang ditemukan di setiap jenis madu,
                            termasuk zat besi, seng, kalium, kalsium, dan tembaga, serta
                            vitamin C dan antioksidan lainnya, dapat membantu mengurangi
                            munculnya keriput, meredakan peradangan, dan mengurangi
                            munculnya bekas luka, noda, dan luka bakar saat dioleskan.
                            </p>
                            <br>
                            <h5>5. Cegah Penyakit Kronis</h5>
                            <p>
                            Manfaat madu akasia yang kelima untuk membantu mencegah
                            penyakit kronis. Antioksidan yang ditemukan di semua jenis madu,
                            termasuk madu akasia, sangat baik dalam mencari radikal bebas
                            di seluruh tubuh dan mengurangi dampak negatif dari stres oksidatif.
                            </p>
                            <br>
                            <h5>6. Tingkatkan Sistem Kekebalan Tubuh</h5>
                            <p>
                            Manfaat madu akasia yang keenam dapat membantu meningkatkan sistem
                            kekebalan tubuh. Madu akasia memiliki hidrogen peroksida secara alami,
                            seperti halnya banyak bentuk madu lainnya, dan ini adalah komponen
                            antibakteri yang kuat.
                            </p>
                            <br>
                            <a href="#daftar-produk" class="theme-btn">&rarr; Lihat Produk &larr;</a>
                           
                        </div>
                        
                        <br>    

                        <div class="section-title">
                            <h2>Keunggulan Produk <span>Madu Premium</span></h2>
                            <img src="{{asset('img/product-3.webp')}}" alt="Akasia">
                        </div>
                        
                        <div class="p-3">

                            <h5>1. Membantu Meningkatkan Stamina dan Kekebalan Tubuh </h5>
                            <p>
                            Manfaat madu hutan ini disebabkan oleh sifatnya sebagai antibakteri dan
                            antimikroba, terutama pada bakteri Gram positif.  
                            </p>
                            
                            <br>
                            <h5>2. Meningkatkan Nafsu Makan</h5>
                            <p>
                            Hal ini disebabkan oleh kandungan fruktosa dan glukosa yang tinggi
                            pada madu hutan sehingga dapat bertindak sebagai stimulan bagi pencernaan. 
                            </p>

                             <br>   
                            <h5>3. Menyehatkan Kulit</h5>
                            <p>
                            Madu hutan juga dipercaya dapat mengobati luka bakar, menyehatkan kulit, wajah, dan bibir
                            </p>

                            <br>
                            <h5>4. Menurunkan Tekanan Darah</h5>
                            <p>
                            Madu dikenal sebagai makanan yang memiliki kekuatan antioksidan. Menurut penelitian,
                            antioksidan yang tinggi terbukti mampu menurunkan tekanan darah. Kondisi ini juga akan
                            menurunkan risiko seangan jantung, stroke, hingga beberapa jenis kanker. 
                            </p>

                            <br>
                            <h5>5. Memperbaiki Kolesterol</h5>
                            <p>
                            Madu dikenal dapat memperbaiki kualitas kolesterol dalam tubuh. 
                            Beberapa penelitian dalam National Institute of Health, madu diketahui
                            mampu mengurangi total kadar kolesterol jahat LDL sekaligus meningkatkan
                            kolesterol baik HDL dalam tubuh. Penelitian yang ada juga menunjukan bahwa
                            konsumsi madu dapat menyebabkan penurunan berat badan sederhana. 
                            </p>

                            <br>
                            <h5>6. Menyembuhkan Luka</h5>
                            <p>
                            Sejak zaman Mesir kuno, madu topikal telah dikenal sebagai obat untuk menyembuhkan
                            luka dan luka bakar. Madu juga diketahui menjadi obat paling efektif untuk menyembuhkan
                            luka bakar parsial dan luka pasca operasi. Para peneliti pecaya bahwa kekuatan
                            penyembuhan madu berasal dari efek antibakteri dan anti-inflamasi yang terkandung
                            di dalamnya.
                            </p>
                            
                            <br>
                            <h5>7. Bantu Meredakan Batuk Pilek</h5>
                            <p>
                            Dikutip dari WebMD, sejumlah penelitian menunjukan bahwa madu dapat menenangkan selaput
                            yang meradang dan meredakan batuk. Dalam sebuah penelitian lainnya yang melibatkan 139 anak,
                            madu khususnya madu soba diketahui mengalahkan dekstrometorfan (penekan batuk) dan meredakan
                            batuk malam hari pada anak-anak serta meningkatkan kualitas tidur mereka.
                            </p>
                            <br>
                            <a href="#daftar-produk" class="theme-btn">&rarr; Lihat Produk &larr;</a>
                        </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- benefit-of-product-section-end -->


     <!-- foto-produk-carousel-start -->
        <section class="client-area">
            <div class="container">
                <h2 class="hidden">client</h2>
                <div class="client-item">
                    <div class="client-carousel owl-carousel">
                        @foreach($foto_produk_akasia as $foto)
                        <img src="{{asset(Storage::url($foto->foto))}}" alt="clinet">
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- foto-produk-carousel-end -->
        
        <!-- blog-area-start -->
        <section class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2><span>Artikel</span> Seputar Madu</h2>
                            <p>Ingin mencari tau informasi seputar madu? Artikel berikut
                                sangat membantu Anda untuk mengetahui tentang madu, manfaat madu,
                                dan berbisnis madu. </p>
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
        
        <!-- product-area-start -->
        <section class="product-area section-padding" id="daftar-produk">
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
                                        <li><a target="_blank" data-bs-toggle="tooltip" data-bs-html="true" title="Pesan"
                                                href="{{$links}}"><i class="fi flaticon-shopping-cart"></i></a></li>
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
                <!-- <div class="view-btn">
                    <a class="theme-btn" href="{{ route('website.produk') }}">Lihat Semua <i class="fa fa-angle-double-right"></i></a>
                </div> -->
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
        <!-- <section class="tp-projects section-padding">
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
        </section> -->
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
                            <img src="{{asset('img/about.webp')}}" alt>
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
        <!-- <section class="client-area">
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
        </section> -->
        <!-- client-area end -->

        
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
                                <a href="javascript:void(0)" id="kirim" target="_blank" class="btn btn-lg btn-success">
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

@section('page_script')

    <script>
        document.querySelector("#kirim").addEventListener("click", pesan);

        function pesan() {
            const linkWA = 'https://api.whatsapp.com/send?phone=6281370721854<&text=';

            const pesan = "Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"+"Saya tertarik membeli produk NailHoney";
            
            window.open(linkWA+pesan);
        }
    </script>

@endsection
