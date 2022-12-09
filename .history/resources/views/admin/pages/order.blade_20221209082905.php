@extends('admin.layouts.master')

@section('title', 'Orders')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <h1>Danh sách Orders</h1>
    <div class="table-responsive">
        <table class="table table-bordered w-75">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Lời nhắn</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thời gian xác nhận</th>
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
    </div>
@endsection
