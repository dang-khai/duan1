@extends('admin.layouts.master')

@section('title', 'Orders')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        tr {
            height: 50px;
        }
    </style>
@endsection

@section('content')
    <h1>Danh sách Orders</h1>
    {{-- <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="th-sm>#</th>
                    <th class="th-sm>Tên</th>
                    <th class="th-sm>Email</th>
                    <th class="th-sm>Số điện thoại</th>
                    <th class="th-sm>Địa chỉ</th>
                    <th class="th-sm>Lời nhắn</th>
                    <th class="th-sm>Trạng thái</th>
                    <th class="th-sm>Thời gian xác nhận</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
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
    </div> --}}
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Mark@gmail.com</td>
                <td>123456789</td>
                <td>46 Dương Quảng Hàm, P.5, Q.Gò Vấp, TP.HCM</td>
                <td>Đã được xác nhận</td>
            </tr>
        </tbody>
    </table>
@endsection
