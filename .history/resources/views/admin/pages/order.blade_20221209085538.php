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
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <div class="data">
                alo
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark@gmail.com</td>
                    <td>123456789</td>
                    <td>46 Dương Quảng Hàm, P.5, Q.Gò Vấp, TP.HCM</td>
                    <td>Đã được xác nhận</td>
                    <td><a class="btn btn-primary">Xác nhận</a>
                        <a class="btn btn-primary">Xóa</a>
                    </td>
                </tr>
            </div>
        </tbody>
    </table>
@endsection

@section('js')

@endsection
