@extends('admin.layouts.master')

@section('title', 'Customers')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <section>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCateModal">
            Thêm danh mục sản phẩm
        </button>
        <!-- Modal -->
        <div class="modal fade" id="addCateModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModal">Thêm danh mục</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('admin_addCategory') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" name="name_cate">
                            </div>
                            @error('name_cate')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <table class="table table-striped w-50">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Loại</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tr>
            @foreach ($data as $data)
                <th scope="row">{{ $stt++ }}</td>
                <td>{{ $data->name_cate }}</td>
                <td class="d-flex">
                    <form method="POST" action="{{ route('admin_editCategory') }}" enctype="multipart/form-data">
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
                                            <form>
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <div class="mb-3">
                                                    <label class="form-label">Tên sản phẩm</label>
                                                    <input type="text" class="form-control" name="name_cate"
                                                        value="{{ $data->name_cate }}">
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

                    <form method="POST" action="{{ route('admin_deleteCategory', $data->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
                    </form>
                </td>
        </tr>
        @endforeach

    </table>
@endsection
