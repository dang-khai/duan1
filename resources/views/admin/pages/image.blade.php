@extends('admin.layouts.master')

@section('title', 'Product')

@section('css')
<!-- link css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
<section>
    <a href="{{ route('admin_product') }}"><button class="btn btn-primary">Trở về</button></a>
    <h2>Hình ảnh</h2>
    <div class="row mt-4">
        @foreach ($img as $image)
        <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <img src="{{ asset('storage') . '/' . $image->url }}" class="card-img-top">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex">
        <form method="POST" action=" {{ route('admin_deleteImage', request()->route('id') ) }} ">
            @csrf
            <button type="submit" class="btn btn-danger me-3"
                onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa tất cả</button>
        </form>
        <form method="POST" action="{{ route('admin_addImage', request()->route('id')) }}" enctype="multipart/form-data">
            @csrf
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm ảnh</button>
            <!-- modal add img -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm hình ảnh</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- sửa sp -->
                            <div class="mb-3">
                                <label class="form-label">Hình ảnh</label>
                                <input class="form-control" name="images[]" type="file" accept="image/*" multiple>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
            <!-- <div>{{ request()->route('id') }}</div> -->
