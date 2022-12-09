@extends('admin.layouts.master')

@section('title', 'Orders')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Lời nhắn</th>
                <th>Trạng thái</th>
                <th>Thời gian xác nhận</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Mark@gmail.com</td>
                <td>123456789</td>
                <td>46 Dương Quảng Hàm, P.5, Q.Gò Vấp, TP.HCM</td>
                <td>Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn </td>
                <td>Đã được xác nhận</td>
                <td>09/12/2022</td>
            </tr>
        </tbody>
    </table>
@endsection
