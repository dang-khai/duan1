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
                <h1>Verify Your Email Address</h1>
            </div>
        </div>
    </div>
@endsection
