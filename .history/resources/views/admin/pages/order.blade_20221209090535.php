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
        <tbody id="data">
            {{-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Mark@gmail.com</td>
                <td>123456789</td>
                <td>46 Dương Quảng Hàm, P.5, Q.Gò Vấp, TP.HCM</td>
                <td>Đã được xác nhận</td>
                <td><a class="btn btn-primary">Xác nhận</a>
                    <a class="btn btn-primary">Xóa</a>
                </td>
            </tr> --}}
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/orders',
                type: 'GET',
                cache: false,
                dataType: 'JSON',
                success: function(data) {
                    let list = data.data;
                    let html = '';
                    let index = 1;
                    list.forEach(element => {
                        html += `<tr>
                                    <th scope="row">${index++}</th>
                                    <td>${element.name}</td>
                                    <td>${element.email}</td>
                                    <td>${element.phone}</td>
                                    <td>${element.address}</td>
                                    <td>${element.status}</td>
                                    <td><a class="btn btn-primary">Xác nhận</a>
                                        <a class="btn btn-primary">Xóa</a>
                                    </td>
                                </tr>`;
                    });
                    $('#data').html(html);
                }
            })
        });
    </script>
@endsection
