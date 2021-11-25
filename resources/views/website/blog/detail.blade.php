@extends('layout.front_layout')

@section('title','Blog')


@section('content')

  <!-- start of breadcumb-section -->
  <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Blog Detail</h2>
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li><span>Blog Detail</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape-img-1"><img src="assets/images/slider/img-2.png" alt=""></div>
            <div class="hero-shape-img-2"><img src="assets/images/slider/img-3.png" alt=""></div>
        </div>
        <!-- end of tp-breadcumb-section-->


        <!-- start blog-single-section -->
        <section class="blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="blog-content clearfix">
                            <div class="post">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-7.jpg" alt>
                                </div>
                                <ul class="entry-meta">
                                    <li>
                                        <img src="assets/images/blog/author.jpg" alt>
                                        &nbsp; Oleh <a href="#">{{$blog->penulis}}</a>
                                    </li>
                                    <li>{{$blog->created_at->format('M, d-Y')}}</li>
                                </ul>
                                <h2>{{$blog->judul}}</h2>
                                {{$blog->konten}}
                            </div>

                            <div class="tag-share clearfix">
                                <div class="tag">
                                    <ul>
                                        <li><a href="#">Raw</a></li>
                                        <li><a href="#">Flower</a></li>
                                        <li><a href="#">Hill</a></li>
                                    </ul>
                                </div>
                                <div class="share">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- end tag-share -->

                            <div class="author-box">
                                <div class="author-avatar">
                                    <a href="#" target="_blank"><img src="assets/images/blog-details/author.jpg"
                                            alt></a>
                                </div>
                                <div class="author-content">
                                    <a href="#" class="author-name">Henry Joyes</a>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour, or randomised</p>
                                    <div class="socials">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end author-box -->
                            <div class="more-posts clearfix">
                                <div class="previous-post">
                                    <a href="#">
                                        <span class="post-control-link">Previous</span>
                                    </a>
                                </div>
                                <div class="next-post">
                                    <a href="0">
                                        <span class="post-control-link">Next post</span>
                                    </a>
                                </div>
                            </div> <!-- end more-posts -->

                            <div class="comments-area">
                                <div class="comments-section">
                                    <h3 class="comments-title">Comments</h3>
                                    <ol class="comments">
                                        <li class="comment even thread-even depth-1" id="comment-1">
                                            <div id="div-comment-1">
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img
                                                            src="assets/images/blog-details/comments-author/img-1.jpg"
                                                            alt></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>John Abraham <span class="comments-date">January 12,2021
                                                                    At 9.00am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>I will give you a complete account of the system, and
                                                                expound the actual teachings of the great explorer of
                                                                the truth, </p>
                                                            <div class="comments-reply">
                                                                <a class="comment-reply-link"
                                                                    href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div>
                                                        <div class="comment-theme">
                                                            <div class="comment-image"><img
                                                                    src="assets/images/blog-details/comments-author/img-2.jpg"
                                                                    alt></div>
                                                        </div>
                                                        <div class="comment-main-area">
                                                            <div class="comment-wrapper">
                                                                <div class="comments-meta">
                                                                    <h4>Lily Watson <span class="comments-date">January
                                                                            12,2021 At 9.00am</span></h4>
                                                                </div>
                                                                <div class="comment-area">
                                                                    <p>I will give you a complete account of the system,
                                                                        and expound the actual teachings of the great
                                                                        explorer of the truth, </p>
                                                                    <div class="comments-reply">
                                                                        <a class="comment-reply-link"
                                                                            href="#"><span>Reply</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li class="comment">
                                                            <div>
                                                                <div class="comment-theme">
                                                                    <div class="comment-image"><img
                                                                            src="assets/images/blog-details/comments-author/img-3.jpg"
                                                                            alt></div>
                                                                </div>
                                                                <div class="comment-main-area">
                                                                    <div class="comment-wrapper">
                                                                        <div class="comments-meta">
                                                                            <h4>John Abraham <span
                                                                                    class="comments-date">January
                                                                                    12,2021 At 9.00am</span></h4>
                                                                        </div>
                                                                        <div class="comment-area">
                                                                            <p>I will give you a complete account of the
                                                                                system, and expound the actual teachings
                                                                                of the great explorer of the truth, </p>
                                                                            <div class="comments-reply">
                                                                                <a class="comment-reply-link"
                                                                                    href="#"><span>Reply</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="comment">
                                            <div>
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img
                                                            src="assets/images/blog-details/comments-author/img-1.jpg"
                                                            alt></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>John Abraham <span class="comments-date">January 12,2021
                                                                    At 9.00am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>I will give you a complete account of the system, and
                                                                expound the actual teachings of the great explorer of
                                                                the truth, </p>
                                                            <div class="comments-reply">
                                                                <a class="comment-reply-link"
                                                                    href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div> <!-- end comments-section -->

                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Post Comments</h3>
                                    <form id="commentform" class="comment-form">
                                        <div class="form-textarea">
                                            <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                        </div>
                                        <div class="form-inputs">
                                            <input placeholder="Website" type="url">
                                            <input placeholder="Name" type="text">
                                            <input placeholder="Email" type="email">
                                        </div>
                                        <div class="form-submit">
                                            <input id="submit" value="Post Comment" type="submit">
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end comments-area -->
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
                                    <li><a href="#">Queen Bee Honey <span>(10)</span></a></li>
                                    <li><a href="#">Sunflower Honey <span>(07)</span></a></li>
                                    <li><a href="#">Manuka Honey <span>(09)</span></a></li>
                                    <li><a href="#">Wildflower Honey <span>(11)</span></a></li>
                                    <li><a href="#">Mango Flower Honey <span>(18)</span></a></li>
                                    <li><a href="#">Mustard Flower Honey <span>(17)</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Recent post</h3>
                                <div class="posts">
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="assets/images/recent-posts/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Actual teachings of the great explorer of the truth.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="assets/images/recent-posts/img-2.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">The truth, the master-builder of human happiness</a></h4>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="assets/images/recent-posts/img-3.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Explorer of the truth, the master-builder of human
                                                    happiness</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget tag-widget">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-section -->

@endsection

@section('page_style')
    <style>
        h1 {
            color: blue;
        }  
    </style>
@endsection