<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="d-flex ">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-dark vh-100 position-relative"
        style="width: 300px; background-color: #FCB000;">
        <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-3">PETPOLY</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="http://127.0.0.1:8000/admin/" class="nav-link text-dark" aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#table" />
                    </svg>
                    Orders
                </a>
            </li>
            <li>
                <a href="product" class="nav-link active ">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#grid" />
                    </svg>
                    Products
                </a>
            </li>
            <li>
                <a href="customer" class="nav-link text-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#people-circle" />
                    </svg>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="">Sign out</a></li>
            </ul>
        </div>
    </div>
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
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status" id="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <table id="employees"></table>