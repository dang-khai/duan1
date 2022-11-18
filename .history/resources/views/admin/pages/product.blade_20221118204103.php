<div class="d-flex justify-content-between align-item-center">

    @extends('admin.layouts.master')

    @section('title', 'Product')
    @php
    $title = 'product';
    @endphp
    @section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endsection

    @section('content')
    <section>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm sản phẩm
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('apiAddproducts') }}">
                            <div class="mb-3">
                                <label class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Loại</label>
                                <select class="form-select" aria-label="Default select example" name="id_cate">
                                    <option selected>Open this select menu</option>
                                    @foreach($cate as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->name_cate }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Đời</label>
                                <input type="text" class="form-control" name="year">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Màu</label>
                                <input type="text" class="form-control" name="color">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Giá</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <table class="table table-striped w-75">
        <thead>
            <tr>
                <th scope="col">Tên</th>
                <th scope="col">Đời</th>
                <th scope="col">Màu</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Giá</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tr>
            @foreach($product as $product)

            <th scope="row">{{ $product->name }}</td>
            <td>{{ $product->year }}</td>
            <td>{{ $product->color }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td class="d-flex">
                <form>
                    <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $product->id }}">Sửa</button>
                    <section>
                        <!-- Modal edit -->
                        <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1" aria-labelledby=""
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa sản phẩm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('apiAddproducts') }}">
                                            <div class="mb-3">
                                                <label class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $product->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Loại</label>
                                                <select name="" id="">
                                                    <!-- chỗ này foreach -->
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Đời</label>
                                                <input type="text" class="form-control" name="year"
                                                    value="{{ $product->year }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Màu</label>
                                                <input type="text" class="form-control" name="color"
                                                    value="{{ $product->color }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Giá</label>
                                                <input type="text" class="form-control" name="price"
                                                    value="{{ $product->price }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Mô tả</label>
                                                <textarea class="form-control" rows="3" name="description"
                                                    placeholder="{{ $product->description }}"></textarea>
                                            </div>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </form>
                <form method="POST" action="{{ url('/') }}/api/deleteProduct/{{ $product->id }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    @endsection
</div>