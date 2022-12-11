@extends('admin.layouts.master')

@section('title', 'Orders')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <th></th>
            </tr>
        </thead>
        <tbody id="data">
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $index++ }}</th>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td style="width:11%">{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td style="width:15%">{{ $order->status == 0 ? 'Đang chờ xác nhận' : 'Đã xác nhận' }}</td>
                    <td style="display:flex;gap:5px;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            Thêm sản phẩm
                        </button>
                        @if ($order->status == 0)
                            <form id="update-{{ $order->id }}" action="{{ route('admin.orders.update', $order->id) }}"
                                method="post">
                                @csrf
                                <a class="btn btn-primary"
                                    onclick="event.preventDefault(); document.getElementById('update-{{ $order->id }}').submit();">Xác
                                    nhận</a>
                            </form>
                        @endif
                        <form id="delete-{{ $order->id }}" action="{{ route('admin.orders.delete', $order->id) }}"
                            method="post">
                            @csrf
                            <a class="btn btn-danger"
                                onclick="event.preventDefault(); document.getElementById('delete-{{ $order->id }}').submit();">Xóa</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
