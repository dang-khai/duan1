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
                            Sản phẩm
                        </button>
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sản phẩm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('admin_addProduct') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Loại</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="id_cate">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($cate as $cates)
                                                        <option value="{{ $cates->id }}">{{ $cates->name_cate }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_cate')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Đời</label>
                                                <input type="text" class="form-control" name="year"
                                                    value="{{ old('year') }}">
                                                @error('year')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Màu</label>
                                                <input type="text" class="form-control" name="color"
                                                    value="{{ old('color') }}">
                                                @error('color')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Hình ảnh</label>
                                                <input class="form-control" name="images[]" type="file" accept="image/*"
                                                    multiple>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Giá</label>
                                                <input type="text" class="form-control" name="price"
                                                    value="{{ old('price') }}">
                                                @error('price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Trạng thái</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="status">
                                                    <option selected value="0">Xe mới</option>
                                                    <option value="1">Xe cũ</option>
                                                </select>
                                                @error('status')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Mô tả</label>
                                                <textarea class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
