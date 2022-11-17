<div class="d-flex justify-content-between align-item-center">
    @extends('admin.layouts.master')

    @section('title', 'Category')
    @php
        $title = 'category';
    @endphp
    @section('css')
        <!-- link css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endsection

    @section('content')
        <section>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Thêm danh mục sản phẩm
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('apiAddCategories') }}">
                                <div class="mb-3">
                                    <label class="form-label">Tên danh mục</label>
                                    <input type="text" class="form-control" name="name_cate">
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
            // api url
            const api_url = "{{ route('apiShowAllCategories') }}";
            // Defining async function
            async function getapi(url) {
                // Storing response
                const response = await fetch(url);
                // Storing data in form of JSON
                var data = await response.json();
                if (response) {
                    hideloader();
                }
                show(data);
            }
            // Calling that async function
            getapi(api_url);
            // Function to hide the loader
            function hideloader() {
                document.getElementById('loading').style.display = 'none';
            }
            // Function to define innerHTML for HTML table
            function show(data) {
                let tab =
                    `<table">
            <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Handle</th>
            </tr>
            </thead>`;
                // Loop to access all rows
                for (let r of data) {
                    tab += `
        <tr>
        <th scope="row">${r.id} </td>
        <td>${r.name_cate}</td>	
        <td class="d-flex">
        <form method="POST" action="">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-secondary me-2">Sửa</button>
        </form>
        <form method="POST" action="{{ url('/') }}/api/deleteCategory/${r.id}">
            @csrf
            @method('delete')   
            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
        </form>
      </td>		
    </tr>`;
                }
                // Setting innerHTML as tab variable
                document.getElementById("product").innerHTML = tab;
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
