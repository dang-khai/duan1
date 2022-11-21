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
    @if (count($errors) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#addModal').modal('show');
        });
    </script>
  @endif
    <section>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Thêm sản phẩm
        </button>
        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('admin_addProduct') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Loại</label>
                                <select class="form-select" aria-label="Default select example" name="id_cate">
                                    <option selected>Open this select menu</option>
                                    @foreach ($cate as $cates)
                                    <option value="{{ $cates->id }}">{{ $cates->name_cate }}</option>
                                    @endforeach
                                </select>
                                @error('id_cate')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Đời</label>
                                <input type="text" class="form-control" name="year">
                                @error('year')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Màu</label>
                                <input type="text" class="form-control" name="color">
                                @error('color')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Giá</label>
                                <input type="text" class="form-control" name="price">
                                @error('price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
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
                <th scope="col">Loại</th>
                <th scope="col">Đời</th>
                <th scope="col">Màu</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Giá</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tr>
            @foreach ($data as $data)
            <th scope="row">{{ $data->name }}</td>
            <td>{{ $data->name_cate }}</td>
            <td>{{ $data->year }}</td>
            <td>{{ $data->color }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->price }}</td>
            <td class="d-flex">
                <form method="POST" action="{{ route('admin_edit') }}" enctype="multipart/form-data">
                    @csrf
                    <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $data->id }}">Sửa</button>
                    <section>
                        <!-- Modal edit -->
                        <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" aria-labelledby=""
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa sản phẩm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- sửa sp -->
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $data->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Loại</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="id_cate">
                                                <!-- <option selected>{{ $data->name_cate }}</option> -->
                                                @foreach ($cate as $cates)
                                                <option value="{{ $cates->id }}">{{ $cates->name_cate }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Đời</label>
                                            <input type="text" class="form-control" name="year"
                                                value="{{ $data->year }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Màu</label>
                                            <input type="text" class="form-control" name="color"
                                                value="{{ $data->color }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Giá</label>
                                            <input type="text" class="form-control" name="price"
                                                value="{{ $data->price }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mô tả</label>
                                            <textarea class="form-control" rows="3"
                                                name="description">{{ $data->description }}</textarea>
                                        </div>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
                <form method="POST" action="{{ route('admin_deleteProduct', $data->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    
    @endsection
</div>