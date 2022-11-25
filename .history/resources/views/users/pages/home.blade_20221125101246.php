@extends('users.master.master')

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1><a href="{{ route('admin_home') }}">Admin nè</a></h1>
    </div>
@endsection
