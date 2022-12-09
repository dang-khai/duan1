@extends('admin.layouts.master')

@section('title', 'Orders')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <h1>Danh sách Orders</h1>
    {{-- <div class="table-responsive">
        <table class="table table-bordered">
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
    <table id="dtBasicExample" class="table" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Position
                </th>
                <th class="th-sm">Office
                </th>
                <th class="th-sm">Age
                </th>
                <th class="th-sm">Start date
                </th>
                <th class="th-sm">Salary
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
        </tbody>
    </table>
@endsection
