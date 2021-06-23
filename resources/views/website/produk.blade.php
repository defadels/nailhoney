@extends('layout.front_layout')

@section('title','Produk')


@section('content')
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


      <hr class="featurette-divider">
    </div>

@endsection


@section('page_script')
@endsection

@section('page_style')
    <style>
        h1 {
            color: red;
        }  
    </style>
@endsection