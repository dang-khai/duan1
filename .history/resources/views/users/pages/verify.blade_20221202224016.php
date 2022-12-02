@extends('users.master.master')

@section('title', 'Verify Email')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-car.css') }}">
    <style>
        footer {
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
        }

        .notification {
            min-height: calc(100vh - 54px - 313px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            gap: 50px
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="notification">
            <div class="notification-title">
                <h2>Verify Your Email Address</h1>
            </div>
            <div class="notification-content">
                Trước khi tiếp tục, hãy kiểm tra email của bạn để biết liên kết xác minh. Nếu bạn không nhận được email bấm
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit">vào đây </button>.
                </form>
                để nhận liên kết xác minh mới
            </div>
        </div>
    </div>
@endsection
