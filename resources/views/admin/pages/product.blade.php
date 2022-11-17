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
                                    <div id="cate"></div>
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
    @endsection

    @section('js')
        <script>
            const api_product_url = "{{ route('apiShowAllproducts') }}";
            async function getapi(url) {
                const response = await fetch(url);
                var data = await response.json();
                if (response) {
                    hideloader();
                }
                show(data);
            }
            getapi(api_product_url);

            function hideloader() {
                document.getElementById('loading').style.display = 'none';
            }

            function show_cate(data) {}

            function show(data) {
                let cate = `<select class="form-select" name="id_cate" id="cate" aria-label="Default select example">`;
                for (let r of data.cate) {
                    cate += `<option value="${r.id}"> ${r.id} . ${r.name_cate}</option>`;
                }
                let tab =
                    `<table">
            <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Year</th>
            <th scope="col">Color</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Giá</th>
            <th scope="col">Handle</th>
            </tr>
            </thead>`;
                // Loop to access all rows
                for (let r of data.product) {
                    tab += `
        <tr>
        <th scope="row">${r.name} </td>
        <td>${r.year}</td>
        <td>${r.color}</td>
        <td>${r.description}</td>
        <td>${r.price}</td>	
        <td class="d-flex">
        <form method="POST" action="">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-secondary me-2">Sửa</button>
        </form>
        <form method="POST" action="{{ url('/') }}/api/deleteProduct/${r.id}">
            @csrf
            @method('delete')   
            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
        </form>
        </td>		
    </tr>`;
                }
                // Setting innerHTML as tab variable
                document.getElementById("product").innerHTML = tab;
                document.getElementById("cate").innerHTML = cate;

            }
        </script>
    @endsection

    @section('loading')
        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status" id="loading">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <table id="product" class="table table-striped w-75"></table>
        <div class="clear-fix"></div>
    @endsection
</div>
