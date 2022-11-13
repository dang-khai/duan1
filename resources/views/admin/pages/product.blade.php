@extends('admin.layouts.master')

@section('title','product')

@section('css')
<!-- link css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<section>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
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
          <form method="POST" action="http://127.0.0.1:8000/api/addProduct">
            <div class="mb-3">
              <label class="form-label">Tên sản phẩm</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
              <label class="form-label">Loại</label>
              <input type="text" class="form-control" name="id_cate">
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
  // api url
  const api_url = "http://127.0.0.1:8000/api/allProduct/";

  // Defining async function
  async function getapi(url) {

    // Storing response
    const response = await fetch(url);

    // Storing data in form of JSON
    var data = await response.json();
    console.log(data);
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
      `<tr>
          <th>Name</th>
          <th>Year</th>
          <th>Color</th>
          <th>Mô tả</th>
          <th>Giá</th>
          </tr>`;

    // Loop to access all rows
    for (let r of data) {
      tab += `<tr>
      <td>${r.name} </td>
      <td>${r.year}</td>
      <td>${r.color}</td>
      <td>${r.description}</td>
      <td>${r.price}</td>		
  </tr>`;
    }
    // Setting innerHTML as tab variable
    document.getElementById("employees").innerHTML = tab;
  }
</script>
@endsection

@section('loading')
<div class="d-flex justify-content-center">
  <div class="spinner-border" role="status" id="loading">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<table id="employees"></table>
<div class="clear-fix"></div>
@endsection