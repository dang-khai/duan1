@extends('admin.layouts.master')

@section('title', 'Orders')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .all-btn {
            display: flex;
            gap: 5px;
        }
    </style>
@endsection

@section('content')
    <h1>Danh sách đơn hàng</h1>
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
                    <td>{{ $order->status == 0 ? 'Đang chờ xác nhận' : 'Đã xác nhận' }}</td>
                    <td class="all-btn">
                        @foreach ($products as $product)
                            @if ($order->id_product == $product->id)
                                <form>
                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $product->id }}">Sản phẩm</button>
                                    <section>
                                        <!-- Modal edit -->
                                        <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1"
                                            aria-labelledby="" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sản Phẩm</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- sửa sp -->
                                                        <div class="mb-3">
                                                            <input type="hidden" class="form-control" name="id"
                                                                value="{{ $product->id }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Tên sản phẩm</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $product->name }}" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Loại</label>
                                                            <select class="form-select" aria-label="Default select example"
                                                                name="id_cate" disabled>
                                                                @foreach ($cates as $cate)
                                                                    @if ($cate->id == $product->id_cate)
                                                                        <option value="{{ $cate->id }}">
                                                                            {{ $cate->name_cate }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Đời</label>
                                                            <input type="text" class="form-control" name="year"
                                                                value="{{ $product->year }}" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Màu</label>
                                                            <input type="text" class="form-control" name="color"
                                                                value="{{ $product->color }}" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Giá</label>
                                                            <input type="text" class="form-control" name="price"
                                                                value="{{ $product->price }}" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Trạng thái</label>
                                                            <input type="text" class="form-control" name="status"
                                                                value="{{ $product->status == 0 ? 'Xe mới' : 'Xe cũ' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Mô tả</label>
                                                            <textarea class="form-control" rows="3" name="description" disabled>{{ $product->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section> --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $product->id }}">
                                        Sản phẩm
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen-sm-down">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sản Phẩm</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Tên xe</th>
                                                                <th scope="col">Loại xe</th>
                                                                <th scope="col">Đời xe</th>
                                                                <th scope="col">Màu xe</th>
                                                                <th scope="col">Giá xe</th>
                                                                <th scope="col">Trạng thái</th>
                                                                {{-- <th scope="col">Mô tả</th> --}}
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">{{ $product->name }}</th>
                                                                <td>
                                                                    @foreach ($cates as $cate)
                                                                        @if ($cate->id == $product->id_cate)
                                                                            {{ $cate->name_cate }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>{{ $product->year }}</td>
                                                                <td>{{ $product->color }}</td>
                                                                <td>{{ $product->price }}</td>
                                                                <td>{{ $product->status == 0 ? 'Xe mới' : 'Xe cũ' }}</td>
                                                                {{-- <td>{{ $product->description }}</td> --}}
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @endforeach
                        @if ($order->status == 0)
                            <form id="update-{{ $order->id }}" action="{{ route('admin.orders.update', $order->id) }}"
                                method="post">
                                @csrf
                                <button class="btn btn-primary"
                                    onclick="event.preventDefault(); document.getElementById('update-{{ $order->id }}').submit();">Xác
                                    nhận</button>
                            </form>
                        @endif
                        <form action="{{ route('admin.orders.delete', $order->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger me-2"
                                onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
