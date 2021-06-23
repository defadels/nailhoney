@extends('layout.front_layout')

@section('title','Kontak')


@section('content')
 <!-- contact -->
 <div class="container mt-5 bg-warning p-4 text-white" id="kontak">
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

 <hr class="featurette-divider">

@endsection

@section('page_style')
    <style>
        h1 {
            color: blue;
        }  
    </style>
@endsection