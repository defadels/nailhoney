@extends('layout.front_layout')

@section('title','Blog')


@section('content')


    <div class="p-4 p-md-5 mb-4 jumbotron text-white rounded bg-dark" style="height: 300px;">
      <div class="col-md-6 px-0">
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Blog / Tentang Madu</a></p>
      </div>
    </div>
  
    <div class="container">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row mb-2">
    @foreach($daftar_blog as $blog)
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">{{ $blog->kategori->nama }}</strong>
              <h3 class="mb-0">{{ $blog->judul }}</h3>
              <div class="mb-1 text-muted">{{ $blog->created_at->format('d F y') }}</div>
              <p class="card-text mb-auto">
              {{ $blog->abstrak }}
              </p>
              <a href="{{ route('website.blog.detail',[$blog->id,$blog->slug]) }}" class="stretched-link btn btn-primary">Lihat Selengkapnya</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="{{ $blog->thumbnail }}" alt="">
    
            </div>
          </div>
        </div>

    @endforeach
  </div>

      <div class="d-flex justify-content-center">
        {{  $daftar_blog->links() }}
      </div>

    <!-- /END THE FEATURETTES -->

  <hr class="featurette-divider">
</div>
@endsection

@section('page_style')
    <style>
        h1 {
            color: blue;
        }  
    </style>
@endsection