@extends('users.master.master')

@section('title', 'Register')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-car.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}" />
@endsection

@section('content')
    <main class="main-container">
        <div class="content-register flex-center">
            <div class="main-content container--1024 flex-center flex-around">
                <div class="form row">
                    <form action="{{ route('post.register') }}" id="register-form" name="registration" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Tên Tài Khoản</label>
                            <input id="username" type="text" name="name" value="{{ old('name') }}"
                                placeholder="Nhập tên tài khoản..." class="row form-control" required/>
                            <span class="form-message"></span>
                            @error('name')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input id="email" type="text" value="{{ old('email') }}" name="email"
                                placeholder="Nhập email..." class="row form-control" required/>
                            <span class="form-message"></span>
                        </div>
                        @error('email')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input id="password" type="password" name="password" placeholder="Nhập mật khẩu..."
                                class="row form-control" required/>
                            <span class="form-message"></span>
                        </div>
                        @error('password')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="re-password">Xác nhận mật khẩu</label>
                            <input id="repassword" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu..."
                                class="row form-control" required/>
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="row form-control bg-submit" />
                        </div>
                        <div class="form-group">
                            <p class="text-center" style="color: #fff">
                                Bạn đã có tài khoản?
                                <span><a href="{{ route('get.login') }}">Đăng nhập</a></span>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="logo-Welcome">
                    <div class="box-background flex-center">
                        <div class="in-box-welcome flex-col">
                            <div class="flex-center">
                                <img src="img/car_logo.png" alt="" width="236" height="63" />
                            </div>

                            <div class="label-box text-center">
                                <p>Đăng ký</p>
                                <p>Chào mừng tới Autohunt</p>
                            </div>
                            <div class="flex-center">
                                <div class="flex-start item-footer icon-ft">
                                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
