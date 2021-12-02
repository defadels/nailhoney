@extends('layout.front_layout')

@section('title','Kontak')


@section('content')
 <!-- start of breadcumb-section -->
 <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Kontak Kami</h2>
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li><span>Kontak</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape-img-1"><img src="{{asset('assets-front/images/slider/img-2.png')}}" alt=""></div>
            <div class="hero-shape-img-2"><img src="{{asset('assets-front/images/slider/img-3.png')}}" alt=""></div>
        </div>
        <!-- end of tp-breadcumb-section-->


        <!-- start contact-pg-contact-section -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-12">
                        <div class="section-title-s3">
                            <h2>Kontak Kami</h2>
                        </div>
                        <div class="contact-details">
                            <p>Jika ingin berdiskusi lebih lanjut, silahkan hubungi melalui
                                nomor WhatsApp atau Email yang tertera. Anda juga bisa berkunjung di kantor kami,
                                sesuai alamat yang tertera.</p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Alamat</h5>
                                    <p>Jalan Karya Dame Komplek Orlando Karya No. 21 H</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Nomor Telepon</h5>
                                    <p>+62 813-7072-1854</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>refill.madu@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-12">
                        <div class="contact-form-area">
                            <div class="section-title-s3">
                                <h2>Form Kontak</h2>
                            </div>
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form">
                                    <div>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Nama Lengkap*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="nomor_hp" id="nomor_hp"
                                            placeholder="Nomor Handphone/WhatsApp*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            placeholder="Alamat Lengkap*">
                                    </div>
                                    <div class="comment-area">
                                        <textarea name="isiPesan" id="isiPesan" placeholder="Silahkan isi pesan Anda...*"></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <a id="kirim" href="javascript:void(0)" class="theme-btn">Kirim</a>
                                        <!-- <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div> -->
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9032778825954!2d98.66130381472708!3d3.6096036511560534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131dcf31efc97%3A0x9165ea6f21381fcf!2sKomplek%20Orlando%20Karya!5e0!3m2!1sen!2sid!4v1637814364721!5m2!1sen!2sid"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->

 <!-- contact -->
 <!-- <div class="container mt-5 bg-warning p-4 text-white" id="kontak">
        <h2>Kontak</h2>
        <p>Sampaikan pesan kamu dalam contact form dibawah</p>
        <hr>
        <div class="row bg-warning">
            <div class="col-lg-12 p-4 col-md-5 bg-warning">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap kamu">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                        <input type="number" class="form-control" id="nohp" placeholder="Masukkan nomor handphone kamu">
                      </div>
                      <hr>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Pesan</label>
                        <textarea class="form-control" id="isipesan" placeholder="Tuliskan rincian pesan kamu di form ini ya" rows="3"></textarea>
                      </div>
                      <a href="javascript:void(0)" id="kirim" class="btn btn-lg btn-outline-light">Kirim Pesan</a>
                </form>
            </div>
        </div>

       
    </div>

 <hr class="featurette-divider"> -->

 @section('page_script')

<script>
    document.querySelector("#kirim").addEventListener("click", kirimPesan);

    function kirimPesan(){
        const linkWA = 'https://api.whatsapp.com/send?phone=6281370721854<&text=';

        const namaLengkap = document.querySelector("#nama").value;

        const email = document.querySelector("#email").value;

        const nomor_hp = document.querySelector("#nomor_hp").value;

        const alamat = document.querySelector("#alamat").value;

        const isiPesan = document.querySelector("#isiPesan").value;

            const pesan = "Assalamualaikum, saya mengirim pesan melalui website www.nailhoney.id.%0A" + "%0ANama :"+ namaLengkap +"%0AEmail :"+" "+email+"%0ANomor handphone/WA :"+" "+nomor_hp+"%0AAlamat lengkap :"+" "+alamat+"%0A%0AIsi pesan :"+" "+isiPesan;

        window.open(linkWA+pesan);

    }

</script>


@endsection

@endsection


