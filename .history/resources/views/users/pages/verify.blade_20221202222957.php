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
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="notification">
            <div class="notification-title">
                <h2>Verify Your Email Address</h1>
            </div>
            <div class="notification-content">
                <p>Before proceeding, please check your email for a verification link. If you did not receive the email</p>
            </div>
        </div>
    </div>
@endsection
