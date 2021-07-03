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

    <div class="row g-5">
        <div class="col-md-8">
          <h3 class="pb-4 mb-4 fst-italic border-bottom">
            {{ $blog->kategori->nama }}
          </h3>
    
          <article class="blog-post">
            <h2 class="blog-post-title">
            {{ $blog->judul }}
            </h2>
            <p class="blog-post-meta">
            {{ $blog->created_at->format('d F Y') }}
            oleh <a href="#">{{ $blog->penulis }}</a></p>
    
            <p>
            {{ $blog->abstrak }}
            </p>
            <hr>
            
            {{ $blog->konten }}
            
          </article>
        
        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic">About</h4>
              <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
            </div>
    
            <div class="p-4">
              <h4 class="fst-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">March 2021</a></li>
                <li><a href="#">February 2021</a></li>
                <li><a href="#">January 2021</a></li>
                <li><a href="#">December 2020</a></li>
                <li><a href="#">November 2020</a></li>
                <li><a href="#">October 2020</a></li>
                <li><a href="#">September 2020</a></li>
                <li><a href="#">August 2020</a></li>
                <li><a href="#">July 2020</a></li>
                <li><a href="#">June 2020</a></li>
                <li><a href="#">May 2020</a></li>
                <li><a href="#">April 2020</a></li>
              </ol>
            </div>
    
            <div class="p-4">
              <h4 class="fst-italic">Elsewhere</h4>
              <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>







    <!-- /END THE FEATURETTES -->

</div>
@endsection

@section('page_style')
    <style>
        h1 {
            color: blue;
        }  
    </style>
@endsection