@extends('layout.front_layout')

@section('title','Blog')


@section('content')
    <!-- start of breadcumb-section -->
    <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li><span>Blog</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape-img-1"><img src="{{asset('assets-front/images/slider/img-2.png')}}" alt=""></div>
            <div class="hero-shape-img-2"><img src="{{asset('assets-front/images/slider/img-3.png')}}" alt=""></div>
        </div>
        <!-- end of tp-breadcumb-section-->


        <!-- start blog-pg-section -->
        <section class="blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-12">
                        <div class="blog-posts clearfix">
                            @foreach($daftar_blog as $blog)
                            <div class="post">
                                <div class="entry-media">
                                    <img src="{{Storage::url($blog->foto)}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; Oleh <a href="#">{{$blog->penulis}}</a>
                                        </li>
                                        <li>{{$blog->created_at->format('M d, Y')}}</li>
                                    </ul>
                                    <h3><a href="{{route('website.blog.detail', $blog->id)}}">{{$blog->judul}}</a></h3>
                                    <p>{{$blog->abstrak}} </p>
                                    <a href="{{route('website.blog.detail', $blog->id)}}" class="read-more">Lihat selengkapnya..</a>
                                </div>
                            </div>
                            @endforeach()

                            <!-- Blog video thumbnail -->
                            <!-- <div class="post format-video">
                                <div class="entry-media video-holder">
                                    <img src="{{asset('assets-front/images/blog/img-9.jpg')}}" alt>
                                    <a href="https://www.youtube.com/embed/Z54bL6kjyOI" class="video-btn"
                                        data-type="iframe">
                                        <i class="ti-control-play"></i>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">We automatically search for and apply coupons when.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div> -->

                            <!-- Blog quote thumbnail -->
                            <!-- <div class="post format-quote">
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">25 Rules and regulation to be successful in your business.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="" class="read-more">Read More..</a>
                                </div>
                            </div> -->

                            <div class="pagination-wrapper pagination-wrapper-left">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="ti-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <h3>Search</h3>
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h3>Categories</h3>
                                <ul>
                                    @foreach($daftar_kategori as $kategori)
                                    <li><a href="#">{{$kategori->nama}} <span>(10)</span></a></li>
                                    @endforeach()
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Recent post</h3>
                                <div class="posts">
                                    @foreach($daftar_blog as $blog)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{Storage::url($blog->foto)}}" style="width: 68px; height: 68px;" alt="">
                                        </div>
                                        <div class="details">
                                            <h4><a href="{{route('website.blog.detail',$blog->id)}}">{!!$blog->judul!!}</a>
                                            </h4>
                                        </div>
                                    </div>
                                   @endforeach() 
                                </div>
                            </div>

                            <!-- Tag -->
                            <!-- <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    <li><a href="#">Flower</a></li>
                                    <li><a href="#">Hill</a></li>
                                    <li><a href="#">Honey</a></li>
                                    <li><a href="#">Forest</a></li>
                                    <li><a href="#">Queen</a></li>
                                    <li><a href="#">Manuka</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">Raw</a></li>
                                </ul>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-pg-section -->
@endsection

@section('page_style')

@endsection