@extends('users.master.master')

@section('title', 'Register')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/product-car.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}" />
@endsection

@section('content')
    <main>
        <div class="content-register flex-center">
            <div class="main-content container--1024 flex-center flex-around">
                <div class="form row">
                    <form action="" id="register-form" name="registration" method="get"
                        onsubmit="return formValidation();">
                        <div class="form-group">
                            <label for="username">Tên Tài Khoản</label>
                            <input id="username" type="text" name="username" placeholder="Nhập tên tài khoản..."
                                class="row form-control" />
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input id="email" type="email" name="email" placeholder="Nhập email..."
                                class="row form-control" />
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input id="password" type="password" name="password" placeholder="Nhập mật khẩu..."
                                class="row form-control" />
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="re-password">Xác nhận mật khẩu</label>
                            <input id="repassword" type="password" name="re-password" placeholder="Nhập lại mật khẩu..."
                                class="row form-control" />
                            <span class="form-message"></span>
                        </div>
                        <div id="successMessage" class="successRegister text-center">
                            Tạo tài khoản thành công!
                        </div>
                        <div class="form-group">
                            <label for="submit"><br /></label>
                            <input type="submit" name="submit" value="Tạo Tài Khoản" class="row form-control bg-submit" />
                        </div>
                        <div class="form-group">
                            <p class="text-center" style="color: #fff">
                                Bạn đã có tài khoản?
                                <span><a href="">Đăng nhập</a></span>
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

@section('js')

    <script>
        Validator({
            form: "#register-form",
            errorSelector: ".form-message",
            rules: [
                Validator.isRequired("#username"),
                Validator.isEmail("#email"),
                Validator.minLength("#password", 8),
                Validator.isRequired("#repassword"),
                Validator.isRepassword(
                    "#repassword",
                    function() {
                        return document.querySelector(
                            "#register-form #password"
                        ).value;
                    },
                    "Mật khẩu nhập lại không chính xác"
                ),
            ],
            onSubmit: function(data) {
                console.log(data);
                // if( == false){
                // document.getElementById('successMessage').style.display = 'block';
                // }
            },
        });
    </script>
    <script src="{{ asset('js/register_Validator.js') }}"></script>
@endsection
