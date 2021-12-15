@extends('layout.auth_front')
@section('title', 'Daftar Akun')

@section('content')
<div class="tp-login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="tp-accountWrapper" action="{{route('register')}}" method="POST">
                            <div class="tp-accountInfo">
                                <div class="tp-accountInfoHeader">
                                    <a href="#"><img src="{{asset('assets-front/images/logo.png')}}" alt=""> Nailhoney</a>
                                    <a class="tp-accountBtn" href="login.html">
                                        <span class="">Log in</span>
                                    </a>
                                </div>
                                <div class="image">
                                    <img src="{{asset('assets-front/images/login.png')}}" alt="">
                                </div>
                                <div class="back-home">
                                    <a class="tp-accountBtn" href="index.html">
                                        <span class="">Kembali ke Beranda</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tp-accountForm form-style">
                                <div class="fromTitle">
                                    <h2>Daftar Akun</h2>
                                    <p>Daftar membuat akun untuk Anda</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda..">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" placeholder="Masukkan email Anda..">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="pwd2" type="password" placeholder="Masukkan passowrd Anda.."
                                               name="pass">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default reveal3" type="button"><i
                                                        class="fa fa-eye"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <input class="pwd3" type="password" placeholder="Ketik kembali password Anda .."
                                                name="pass">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default reveal2" type="button"><i
                                                        class="fa fa-eye"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button type="submit" class="tp-accountBtn">Daftar</button>
                                    </div>
                                </div>
                                <h4 class="or"><span>ATAU</span></h4>
                                <ul class="tp-socialLoginBtn">
                                    <li><button class="facebook" tabindex="0" type="button"><span><i
                                                    class="fa fa-facebook"></i></span></button></li>
                                    <li><button class="twitter" tabindex="0" type="button"><span><i
                                                    class="fa fa-twitter"></i></span></button></li>
                                    <li><button class="linkedin" tabindex="0" type="button"><span><i
                                                    class="fa fa-linkedin"></i></span></button></li>
                                </ul>
                                <p class="subText">Saya sudah punya akun <a href="login.html">Login akun disini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection