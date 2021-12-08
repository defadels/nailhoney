@php 

function rute($namarute){
  $rute = Route::currentRouteName();
  return (strpos($rute , $namarute) === 0) ? 'active' : '';
}

@endphp

<header id="header" class="site-header header-style-2">
            <nav class="navigation navbar navbar-expand-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                                <a class="navbar-brand" href="{{route('website.home')}}"><img src="{{asset('assets-front/images/logo.png')}}"
                                        alt="">Nailhoney</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <a class="menu-close" href="#"><i class="fi flaticon-cancel"></i></a>
                                <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
                                    <!-- <li class="menu-item-has-children">
                                        <a class="active" href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Style 1</a></li>
                                            <li><a href="index-2.html">Home Style 2</a></li>
                                        </ul>
                                    </li> -->
                                    <li>
                                      <a href="{{route('website.home')}}" class="{{rute('website.home')}}">Beranda</a>
                                    </li>
                                    <li><a href="{{route('website.tentang')}}" class="{{rute('website.tentang')}}">Tentang</a></li>
                                    <li><a href="{{route('website.produk')}}" class="{{rute('website.produk')}}">Produk</a></li>
                                    <!-- <li class="menu-item-has-children">
                                        <a href="http://google.com">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Product</a>
                                                <ul class="sub-menu">
                                                    <li><a href="product.html">Product</a></li>
                                                    <li><a href="product-single.html">Product Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Project</a>
                                                <ul class="sub-menu">
                                                    <li><a href="project.html">Project</a></li>
                                                    <li><a href="project-single.html">Project Single</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Manfaat Madu</a></li>
                                            <li><a href="blog-left-sidebar.html">Tentang Madu</a></li>
                                            <li><a href="blog-fullwidth.html">Bisnis Madu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('website.kontak')}}" class="{{rute('website.kontak')}}">Kontak</a></li>
                                </ul>
                            </div><!-- end of nav-collapse -->
                        </div>
                        <!-- <div class="col-lg-2">
                            <div class="header-right d-flex">
                                <div class="header-profile-form-wrapper">
                                    <button class="profile-toggle-btn"><i class="fi flaticon-user"></i></button>
                                    <div class="header-profile-content">
                                        <ul>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="order.html">Order History</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mini-cart">
                                    <button class="cart-toggle-btn"> <i class="fi flaticon-bag"></i> <span
                                            class="cart-count">2</span></button>
                                    <div class="mini-cart-content">
                                        <button class="mini-cart-close"><i class="ti-close"></i></button>
                                        <div class="mini-cart-items">
                                            <div class="mini-cart-item clearfix">
                                                <div class="mini-cart-item-image">
                                                    <a href="product-single.html"><img
                                                            src="{{asset('assets/images/shop/mini-cart/img-1.jpg')}}" alt></a>
                                                </div>
                                                <div class="mini-cart-item-des">
                                                    <a href="product-single.html">Wildflower Honey</a>
                                                    <span class="mini-cart-item-price">$20.15</span>
                                                    <span class="mini-cart-item-quantity">x 1</span>
                                                </div>
                                            </div>
                                            <div class="mini-cart-item clearfix">
                                                <div class="mini-cart-item-image">
                                                    <a href="product-single.html"><img
                                                            src="{{asset('assets/images/shop/mini-cart/img-2.jpg')}}" alt></a>
                                                </div>
                                                <div class="mini-cart-item-des">
                                                    <a href="product-single.html">Queen Bee Honey</a>
                                                    <span class="mini-cart-item-price">$13.25</span>
                                                    <span class="mini-cart-item-quantity">x 2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini-cart-action clearfix">
                                            <span class="mini-checkout-price">Total: $215.14</span>
                                            <div class="mini-btn">
                                                <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                <a href="cart.html" class="view-cart-btn">View Cart</a>
                                            </div>
                                        </div>
                                        <div class="visible-icon"><img src="{{asset('assets/images/shop/mini-cart/bee2.png')}}"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div class="header-wishlist-form-wrapper">
                                    <button class="wishlist-toggle-btn"><i class="fi flaticon-heart"></i> <span
                                            class="cart-count">2</span> </button>
                                    <div class="mini-wislist-content">
                                        <button class="mini-cart-close"><i class="ti-close"></i></button>
                                        <div class="mini-cart-items">
                                            <div class="mini-cart-item clearfix">
                                                <div class="mini-cart-item-image">
                                                    <a href="product-single.html"><img
                                                            src="{{asset('assets/images/shop/mini-cart/img-1.jpg')}}" alt></a>
                                                </div>
                                                <div class="mini-cart-item-des">
                                                    <a href="product-single.html">Wildflower Honey</a>
                                                    <span class="mini-cart-item-price">$20.15</span>
                                                    <span class="mini-cart-item-quantity">x 1</span>
                                                </div>
                                            </div>
                                            <div class="mini-cart-item clearfix">
                                                <div class="mini-cart-item-image">
                                                    <a href="product-single.html"><img
                                                            src="{{asset('assets/images/shop/mini-cart/img-2.jpg')}}" alt></a>
                                                </div>
                                                <div class="mini-cart-item-des">
                                                    <a href="product-single.html">Queen Bee Honey</a>
                                                    <span class="mini-cart-item-price">$13.25</span>
                                                    <span class="mini-cart-item-quantity">x 2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini-cart-action clearfix">
                                            <span class="mini-checkout-price">Total: $215.14</span>
                                            <div class="mini-btn">
                                                <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                <a href="wishlist.html" class="view-cart-btn">View Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="visible-icon"><img src="{{asset('assets/images/shop/mini-cart/bee2.png')}}"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>

<!-- navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('/img/logo.png') }}" alt="" width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ rute('website.home') }}" aria-current="page" href="{{ route('website.home') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ rute('website.produk') }}" href="{{ route('website.produk') }}">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ rute('website.blog') }}" href="{{ route('website.blog') }}">Blog</a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blog
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/tentang-madu">Tentang madu</a></li>
                <li><a class="dropdown-item" href="/manfaat-madu">Manfaat madu</a></li>
                <li><a class="dropdown-item" href="/sistem-keagenan">Keagenan</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Social Media
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" target="_blank" href="https://www.instagram.com/madualhafizh.id/">Instagram</a></li>
                <li><a class="dropdown-item" target="_blank" href="https://www.facebook.com/madualhafizh.id/">Facebook</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ rute('website.kontak') }}" href="{{ route('website.kontak') }}">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
