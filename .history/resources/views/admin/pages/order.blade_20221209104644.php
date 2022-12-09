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
                    <td style="width:15%"><a class="btn btn-primary"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Xác nhận</a>
                        <a class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{-- @section('js')
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('orders.index') }}",
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
                                    <td style="width:11%">${element.phone}</td>
                                    <td>${element.address}</td>
                                    <td style="width:15%">${element.status}</td>
                                    <td style="width:15%"><a class="btn btn-primary">Xác nhận</a>
                                        <a class="btn btn-danger" href="#">Xóa</a>
                                    </td>
                                </tr>`;
                    });
                    $('#data').html(html);
                }
            })
        });
    </script>
@endsection --}}
