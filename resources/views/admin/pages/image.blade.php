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
        <form method="POST" action="{{ route('admin_deleteImage', $img[0]->id_product) }}">
            @csrf
            <button type="submit" class="btn btn-danger me-3"
                onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa tất cả</button>
        </form>
        <form>
            @csrf
            <button type="submit" class="btn btn-primary">Thêm ảnh</button>
        </form>
    </div>
</section>
@endsection