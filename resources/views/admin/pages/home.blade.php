@extends('admin.layouts.master')

@section('title', 'Home')
@php
    $title = 'home';
@endphp
@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <h1>Đây là trang quản trị website</h1>

    <p>Bạn có thể thêm sửa xóa danh mục, sản phẩm, user</p>
@endsection
