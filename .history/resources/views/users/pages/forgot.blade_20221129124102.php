@extends('users.master.master')

@section('title', 'Register')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/product-car.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}" />
@endsection

@section('content')
    <div class="container">
        <main>
            <div class="content-login flex-center">
                <div class="main-content container--1024 flex-center flex-around">
                    <div class="form-login row">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nhập Email của bạn</label>
                                <input type="text" name="email" id="email" placeholder="Nhập email"
                                    class="row form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><br></label>
                                <input type="button" name="check" value="Reset" class="row form-control bg-submit"
                                    onclick="checkEmail()">
                            </div>
                            <div class="form-group">
                                <p class="text-center" style="color:#FFF;">Chưa có tài khoản? <span><a
                                            href="">Đăng ký</a></span></p>
                            </div>
                        </form>
                        <div id="Success"></div>
                    </div>
                    <div class="logo-Welcome">
                        <div class="box-background flex-center">
                            <div class="in-box-welcome flex-col">
                                <div class="flex-center">
                                    <img src="{{ asset('img/car_logo.png') }}" alt="" width="236" height="63">
                                </div>

                                <div class="label-box text-center">
                                    <p>Quên mật khẩu</p>
                                    <p>Chào mừng tới Autohunt</p>
                                </div>
                                <div class="flex-center">
                                    <div class="flex-start item-footer">
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
    </div>
@endsection
