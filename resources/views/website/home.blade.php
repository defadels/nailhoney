@extends('layout.front_layout')

@section('title','Home Page')


@section('content')
<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carousel-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carousel-1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- welcome -->
  <div class="container mt-4" >
    <div class="row text-center">
      <h1 class="p-4">Selamat Datang di Madu Al-Hafizh</h1>
      
      <hr>
      <div class="col-lg-6 col-sm-6 " >
        <img src="img/welcome-1.jpg" style="width: 100%;" alt="">
      </div>
      <div class="col-lg-6 col-sm-6">
        <img src="img/welcome-2.jpg" style="width: 100%;" alt="">
      </div>
    </div>
  </div>

<!-- Penjelasan tentang madu -->
<!-- <div class="jumbotron jumbotron-fluid text-center text-black mt-4" style="background-color: #FCF088;">
  <div class="container">
    <p class="fs-2">
      Madu adalah produk yang dihasilkan oleh lebah. Terdapat beberapa jenis lebah yang menghasilkan madu. Untuk madu hutan sumatera, lebah yang memproduksi 
      adalah lebah Apis dorsata. Lebah liar yang sampai saat ini belum bisa diternakkan. Tinggal di pohon sialang di tengah hutan. Pohon besar dengan tinggi 
      mencapai 100 meter dan diameter pohon mencapai 2 meter. 
    </p> 

      <h5>-= Pusat Madu Hutan Sumatera =-</h5>      
  
  </div>
</div> -->

<div class="p-5 mb-4 bg-light rounded-3 mt-5">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Mengenal Madu</h1>
    <p class="col-md-8 fs-4">  Madu adalah produk yang dihasilkan oleh lebah. Terdapat beberapa jenis lebah yang menghasilkan madu. Untuk madu hutan sumatera, lebah yang memproduksi 
      adalah lebah Apis dorsata. Lebah liar yang sampai saat ini belum bisa diternakkan. Tinggal di pohon sialang di tengah hutan. Pohon besar dengan tinggi 
      mencapai 100 meter dan diameter pohon mencapai 2 meter. .</p>
    <button class="btn btn-primary btn-sm" type="button">-= Pusat Madu Hutan Sumatera =-</button>
  </div>
</div>

  <!-- produk -->
  <div class="container" style="margin-top: 70px;" id="produk">
    <h1 class="text-center">Produk</h1>
    <hr>
    <div class="row">
      <div class="col-md-3 d-flex justify-content-center col-sm-6">
        <div class="card" style="width: 18rem;">
          <img src="img/500gr kotak.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Madu Al-Hafizh 500gr (Petak)
            </h5>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#wonderful">
              Rincian Produk
          </button>

          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center col-sm-6">
        <div class="card" style="width: 18rem;">
          <img src="img/1kg kotak.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Madu Al-HAfizh 1kg (Petak)
            </h5>
               <!-- Button trigger modal -->
               <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#boluCokelat">
                Rincian Produk
            </button>
            
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center col-sm-6">
        <div class="card" style="width: 18rem;">
          <img src="img/500gr bulat.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Madu Al-HAfizh 500gr (Bulat)
            </h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#energiCoklat">
                  Rincian Produk
              </button>

          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center col-sm-6">
        <div class="card" style="width: 18rem;">
          <img src="img/1kg bulat.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Madu Al-Hafizh 1kg (Bulat)
            </h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#original">
              Rincian Produk
          </button>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- carousel testimoni -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="padding: 65px;">
      <div class="carousel-item active ">
        <div class="row">
        <div class="col-md-6 col-sm-4" >
          <img src="img/300gr.jpg" style="width: 150px;" class="rounded-circle mx-auto d-block" alt="">
        </div>
        <div class="col-md-6 col-sm-8">
          <h1>Testimoni dari ... </h1>
          <p>Madu ini sangat enak dan menyehatkan.</p>
        </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6 col-sm-4" >
            <img src="img/300gr.jpg" style="width: 150px;" class="rounded-circle mx-auto d-block" alt="">
          </div>
          <div class="col-md-6 col-sm-8">
            <h1>Testimoni dari ... </h1>
            <p>Madu ini sangat enak dan menyehatkan.</p>
          </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6 col-sm-4" >
            <img src="img/300gr.jpg" style="width: 150px;" class="rounded-circle mx-auto d-block" alt="">
          </div>
          <div class="col-md-6 col-sm-8">
            <h1>Testimoni dari ... </h1>
            <p>Madu ini sangat enak dan menyehatkan.</p>
          </div>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next"  type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon"style="background-color: black;"  aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Modal Action Chat -->
  <div class="modal fade" id="chat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chat Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama"">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor WhatsApp</label>
              <input placeholder="Contoh: 081300123123" type="text" class="form-control" id="nohp" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea" class="form-label">Isi Pesan</label>
                <textarea class="form-control" rows="4" placeholder="Ketikkan pesan kamu disini" id="floatingTextarea"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Kirim WhatsApp</button>
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
    </div>
    </div>
</div>

  <!-- fixed button -->
    <section class="fixed-bottom p-4">
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-success  p-3 rounded-circle float-right" data-bs-toggle="modal" data-bs-target="#chat">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
    </button>
      <button class="btn btn-md btn-light float-right" style="border: 1px solid black;">
        Click untuk chat</button>
    </section>



  <hr class="featurette-divider">

<!-- Kelebihan menjadi reseller -->
<div class="jumbotron text-white text-center mt-4 mb-0 bg-primary p-4" id="reseller">
 <h1>Kelebihan Menjadi Reseller</h1>
 <div class="container p-4">
   <div class="row">
     <div class="col-md-6">
       <p>Diskon produk mulai dari 20% up to 40%</p>
     </div>
     <div class="col-md-6">
       <p>Tinggal posting aja, foto dan video tersedia</p>
     </div>
     <div class="col-md-6">
       <p>Diajarin jualan online sampai bisa</p>  
     </div>
  
   <div class="col-md-6">
     <p>Stok barang aman</p>
   </div>
   <div class="col-md-12">
     <p>Mau dikirim dari Medan atau Jawa? Bisa!</p>
   </div>
 </div>
 </div>
 
 <a class="btn btn-outline-light btn-lg" href="#" role="button">
   <span>
     Gabung Jadi Reseller
   </span></a>
</div>
@endsection