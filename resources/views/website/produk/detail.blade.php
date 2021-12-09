@extends('layout.front_layout')

@section('title','Produk')


@section('content')
 <!-- product-single-section  start-->

 <div class="product-single-section section-padding">
            <div class="container">
                <div class="product-details">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="product-single-img">
                                <div class="product-active owl-carousel">
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/1.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/2.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/3.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/1.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-thumbnil-active  owl-carousel">
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/1.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/2.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/3.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/1.jpg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets-front/images/product-details/2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-single-content">
                                <h5>{{$produk->nama}}</h5>
                                <h6>Rp.{{number_format($produk->harga)}}</h6>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p>{!! $produk->deskripsi !!}
                                </p>
                                <!-- <div class="product-filter-item color">
                                    <div class="color-name">
                                        <span>Color :</span>
                                        <ul>
                                            <li class="color1"><input id="a1" type="radio" name="color" value="30">
                                                <label for="a1"></label>
                                            </li>
                                            <li class="color2"><input id="a2" type="radio" name="color" value="30">
                                                <label for="a2"></label>
                                            </li>
                                            <li class="color3"><input id="a3" type="radio" name="color" value="30">
                                                <label for="a3"></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                
                                <!-- Berat kemasan -->
                                <!-- <div class="product-filter-item color filter-size">
                                    <div class="color-name">
                                        <span>Weight :</span>
                                        <ul>
                                            <li class="color"><input id="wa1" type="radio" name="size" value="30">
                                                <label for="wa1">4L</label>
                                            </li>
                                            <li class="color"><input id="wa2" type="radio" name="size" value="30">
                                                <label for="wa2">2L</label>
                                            </li>
                                            <li class="color"><input id="wa3" type="radio" name="size" value="30">
                                                <label for="wa3">500ML</label>
                                            </li>
                                            <li class="color"><input id="wa4" type="radio" name="size" value="30">
                                                <label for="wa4">200ML</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="pro-single-btn">
                                    <!-- <div class="quantity cart-plus-minus">
                                        <input type="text" value="1">
                                        <div class="dec qtybutton"></div>
                                        <div class="inc qtybutton"></div>
                                    </div> -->
                                    <?php
                                     $links = "https://api.whatsapp.com/send?phone=6281370721854<&text=Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"."%0ASaya ingin memesan produk berikut %0A"."%0ANama produk : ".$produk->nama."%0AHarga : Rp.".number_format($produk->harga)."%0AApakah bisa diproses?";
                                            ?>
                                    <a href="{{ $links }}" class="theme-btn">Pesan</a>
                                </div>
                                <div class="social-share">
                                    <span>Share with : </span>
                                    <ul class="socialLinks">
                                        <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                                        <li><a href='#'><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                                        <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                                        <li><a href='#'><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-area">
                    <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="descripton-tab" data-bs-toggle="pill"
                                data-bs-target="#descripton" type="button" role="tab" aria-controls="descripton"
                                aria-selected="true">Deskripsi</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Information-tab" data-bs-toggle="pill"
                                data-bs-target="#Information" type="button" role="tab" aria-controls="Information"
                                aria-selected="false">Additional Information</button>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Ratings-tab" data-bs-toggle="pill" data-bs-target="#Ratings"
                                type="button" role="tab" aria-controls="Ratings" aria-selected="false">Ratings</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                      <!-- Deskripsi -->
                        <div class="tab-pane fade show active" id="descripton" role="tabpanel"
                            aria-labelledby="descripton-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="Descriptions-item">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam.Sed ut perspiciatis unde
                                                omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                                quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                                quisquam </p>
                                            <div class="Description-table">
                                                <h4>Find Your Category :</h4>
                                                <form action="cart" class="table-responsive">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Size</th>
                                                                <th>Weight</th>
                                                                <th>Queen</th>
                                                                <th>Sunflower</th>
                                                                <th>Hill</th>
                                                                <th>Forest</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>S</td>
                                                                <td>250ML</td>
                                                                <td>60</td>
                                                                <td>10 - 12</td>
                                                                <td>20</td>
                                                                <td>22</td>
                                                            </tr>
                                                            <tr>
                                                                <td>M</td>
                                                                <td>500ML</td>
                                                                <td>62</td>
                                                                <td>12 - 14</td>
                                                                <td>21</td>
                                                                <td>23</td>
                                                            </tr>
                                                            <tr>
                                                                <td>L</td>
                                                                <td>1L</td>
                                                                <td>64</td>
                                                                <td>14 - 18</td>
                                                                <td>23</td>
                                                                <td>24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Xl</td>
                                                                <td>2L</td>
                                                                <td>66</td>
                                                                <td>18 - 20</td>
                                                                <td>24</td>
                                                                <td>25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2Xl</td>
                                                                <td>3L</td>
                                                                <td>68</td>
                                                                <td>20 - 22</td>
                                                                <td>25</td>
                                                                <td>26</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3Xl</td>
                                                                <td>5L</td>
                                                                <td>76</td>
                                                                <td>22 - 24</td>
                                                                <td>27</td>
                                                                <td>28</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="tab-pane fade" id="Ratings" role="tabpanel" aria-labelledby="Ratings-tab">
                            <div class="container">
                                <div class="rating-section">
                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-2">
                                            <div class="rating-top">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="rating-sub">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                            <span>( Based on 45.86K reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="rating-right">
                                                            <div class="rating-right-item">
                                                                <ul>
                                                                    <li>
                                                                        <ul>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress">
                                                                            <div class="bar" style="width:70%">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>70% ( 32.10k)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="rating-right-item">
                                                                <ul>
                                                                    <li>
                                                                        <ul>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress">
                                                                            <div class="bar" style="width:60%">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>15% ( 6.88k)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="rating-right-item">
                                                                <ul>
                                                                    <li>
                                                                        <ul>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress">
                                                                            <div class="bar" style="width:40%">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>10% ( 4.55k)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="rating-right-item">
                                                                <ul>
                                                                    <li>
                                                                        <ul>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress">
                                                                            <div class="bar" style="width:20%">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>5% ( 2.29k)</li>
                                                                </ul>
                                                            </div>
                                                            <div class="rating-right-item">
                                                                <ul>
                                                                    <li>
                                                                        <ul>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress">
                                                                            <div class="bar" style="width:0">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>0% ( 0.00)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="rating-bottom">

                                                <div class="write-review-btn">
                                                    <button class="theme-btn">Write A Review</button>
                                                </div>

                                                <div class="rating-give-section-items">
                                                    <div class="review-btn-btn">
                                                        <button class="theme-btn s2">Cancel Review</button>
                                                    </div>

                                                    <div class="rating-give-section">
                                                        <div class="rating-give-section-wrap">
                                                            <form>
                                                                <span>Give A Review</span>
                                                                <div class="give-rating">
                                                                    <label>
                                                                        <input type="radio" name="stars" value="1" />
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="stars" value="2" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="stars" value="3" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="stars" value="4" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="stars" value="5" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Your Name...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Your Email...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="rv" id="rv" cols="30" rows="10"
                                                                        placeholder="Your Review..."></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="button" class="theme-btn">Submit
                                                                        Review</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="review-rating-wrap">
                                                    <div class="rating-review">
                                                        <div class="rating-review-author">
                                                            <div class="rating-review-author-img">
                                                                <img src="{{asset('assets-front/images/product-details/author.png')}}"
                                                                    alt="">
                                                            </div>
                                                            <div class="rating-review-author-text">
                                                                <div class="rating-review-author-text-inner">
                                                                    <ul class="ratting">
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star-o"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                    <span>06/18/21</span>
                                                                </div>
                                                                <p>Ema Aliana</p>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aliquam hendrerit sem porta dolor congue sagittis Lorem
                                                            ipsum dolor sit amet consectetur.</p>
                                                    </div>
                                                    <div class="rating-review">
                                                        <div class="rating-review-author">
                                                            <div class="rating-review-author-img">
                                                                <img src="{{asset('assets-front/images/product-details/author2.png')}}"
                                                                    alt="">
                                                            </div>
                                                            <div class="rating-review-author-text">
                                                                <div class="rating-review-author-text-inner">
                                                                    <ul class="ratting">
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star-o"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                    <span>06/18/21</span>
                                                                </div>
                                                                <p>John Clyne</p>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aliquam hendrerit sem porta dolor congue sagittis Lorem
                                                            ipsum dolor sit amet consectetur.</p>
                                                    </div>
                                                    <div class="rating-review">
                                                        <div class="rating-review-author">
                                                            <div class="rating-review-author-img">
                                                                <img src="{{asset('assets-front/images/product-details/author3.png')}}"
                                                                    alt="">
                                                            </div>
                                                            <div class="rating-review-author-text">
                                                                <div class="rating-review-author-text-inner">
                                                                    <ul class="ratting">
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star"
                                                                                aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star-o"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                    <span>06/18/21</span>
                                                                </div>
                                                                <p>Lily Jameson</p>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Aliquam hendrerit sem porta dolor congue sagittis Lorem
                                                            ipsum dolor sit amet consectetur.</p>
                                                    </div>
                                                    <div class="rating-review">
                                                        <a href="#">Load More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informasi -->
                        <!-- <div class="tab-pane fade" id="Information" role="tabpanel" aria-labelledby="Information-tab">
                            <div class="container">
                                <div class="Additional-wrap">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td>Ratings</td>
                                                        <td class="ratting">
                                                            <ul>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material Type</td>
                                                        <td>Hill Honey</td>
                                                    </tr>
                                                    <tr>
                                                        <td>weight</td>
                                                        <td>250 gm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seller</td>
                                                        <td>Annahl</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Size</td>
                                                        <td>Small Jar</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="related-product">
            </div>
        </div>
        <!-- product-single-section  end-->

        <!-- product-area-start -->
        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title">
                            <h2>Related <span>Product</span></h2>
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
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Cart"
                                                href="cart.html"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview"><button
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                    class="fi ti-eye"></i></button></li>
                                        <li><a data-bs-toggle="tooltip" data-bs-html="true" title="Add to Wishlist"
                                                href="wishlist.html"><i class="fi flaticon-like"></i></a></li>
                                    </ul>
                                    <!-- <div class="offer-thumb">
                                        <span>-18%</span>
                                    </div> -->
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-single.html">{{$produk->nama}} </a></h3>
                                    <div class="product-btm">
                                        <div class="product-price">
                                            <ul>
                                                <li>Rp.{{number_format($produk->harga)}}</li>
                                                <li></li>
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
                  @endforeach()
                    </div>
                </div>
            </div>

        </section>

        <!-- product-area-end -->

@endsection


@section('page_script')

@endsection

@section('page_style')

@endsection