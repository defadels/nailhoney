@extends('layout.auth_front')
@section('title', 'Login')

@section('content')
<div class="tp-login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="tp-accountWrapper" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="tp-accountInfo">
                                <div class="tp-accountInfoHeader">
                                    <a href="#"><img src="{{asset('assets-front/images/logo.png')}}" alt=""> Nailhoney</a>
                                    <a class="tp-accountBtn" href="{{route('register')}}">
                                        <span class="">Daftar Akun</span>
                                    </a>
                                </div>
                                <div class="image">
                                    <img src="{{asset('assets-front/images/login.png')}}" alt="">
                                </div>
                                <div class="back-home">
                                    <a class="tp-accountBtn" href="{{route('website.home')}}">
                                        <span class="">Kembali ke Beranda</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tp-accountForm form-style">
                                <div class="fromTitle">
                                    <h2>Login</h2>
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <p>Masukkan email dan password untuk login</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label>Email
                                        
                                        </label>
                                        <input type="text" id="email" name="email" placeholder="email-anda@gmail.com">
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Password
                                            
                                        </label>

                                            <input class="pwd" type="password" placeholder=""
                                                name="password">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default reveal" type="button"><i
                                                        class="fa fa-eye"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="check-box-wrap">
                                            <div class="input-box">
                                                <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                                <label for="fruit4">Ingat Saya</label>
                                            </div>
                                            <div class="forget-btn">
                                                <a href="forgot.html">Lupa Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button type="submit" class="tp-accountBtn">Login</button>
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
                                <p class="subText">Belum punya akun? <a href="register.html">Daftar akun Anda disini.</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection