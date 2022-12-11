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
            <td style="width:15%"><a class="btn btn-primary"
                    onclick="event.preventDefault(); document.getElementById('update-form').submit();">Xác nhận</a>
                <form id="update-form" action="{{ route('orders.update', ${id}) }}" method="POST" class="d-none">
                    @csrf
                    @method('put')
                    <input type="hidden" name="status" value="1">
                </form>
                <a class="btn btn-danger" href="#">Xóa</a>
            </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('js')
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
                        let id = element.id;
                        html += `<tr>
                                    <th scope="row">${index++}</th>
                                    <td>${element.name}</td>
                                    <td>${element.email}</td>
                                    <td style="width:11%">${element.phone}</td>
                                    <td>${element.address}</td>
                                    <td style="width:15%">${element.status}</td>
                                    `;
                    });
                    $('#data').html(html);
                }
            })
        });
    </script>
@endsection