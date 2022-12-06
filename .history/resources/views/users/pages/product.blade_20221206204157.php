@extends('users.master.master')

@section('title', 'Product')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/new-car.css') }}">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://github.com/jquery/jquery/blob/master/src/css/hiddenVisibleSelectors.js"></script> --}}
    {{-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.3/rangeslider.min.css"></script> --}}
@endsection

@section('content')
    <main>
        <div class="content-newcar container--1192 flex-around">
            <div class="filter-pane">
                <div class="filter-text">
                    <span>Bộ Lọc Tìm Kiếm</span>
                </div>

                <!--  -->
                <div class="find-area filter-group flex-row">
                    <span class="btn-search" onclick="find()"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" placeholder="Tìm kiếm..." class="input-filter" value="" />
                </div>

                <!--  -->
                <div id="accordion">
                    <form action="">
                        <div class="filter-group">
                            <div class="dropbtn cap flex-around">
                                <span>Năm</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">
                                <label><input type="checkbox" class="namSX checkmark" value="2016" />2016</label>
                                <label><input type="checkbox" class="namSX checkmark" value="2017" />2017</label>
                                <label><input type="checkbox" class="namSX checkmark" value="2018" />2018</label>
                                <label><input type="checkbox" class="namSX checkmark" value="2019" />2019</label>
                                <label><input type="checkbox" class="namSX checkmark" value="2020" />2020</label>
                                <label><input type="checkbox" class="namSX checkmark" value="2021" />2021</label>
                                <label><input type="checkbox" class="namSX checkmark" value="2022" />2022</label>
                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="dropbtn cap flex-around">
                                <span>Hãng xe</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">
                                <label><input type="checkbox" class="hangXe checkmark" value="Audi" />Audi</label>
                                <label><input type="checkbox" class="hangXe checkmark" value="Ford" />Ford</label>
                                <label><input type="checkbox" class="hangXe checkmark" value="Chevrolet" />Chevrolet</label>
                                <label><input type="checkbox" class="hangXe checkmark" value="Tesla" />Tesla</label>
                                <label><input type="checkbox" class="hangXe checkmark" value="Honda" />Honda</label>
                                <label><input type="checkbox" class="hangXe checkmark" value="Kia" />Kia</label>
                                <label><input type="checkbox" class="hangXe checkmark" value="BMW" />BMW</label>
                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="cap flex-around">
                                <span>Dòng xe</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">

                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="cap flex-around">
                                <span>Kiểu thân xe</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">

                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="cap flex-around">
                                <span>Loại hộp số</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">

                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="cap flex-around">
                                <span>Loại nhiên liệu</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">

                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="cap flex-around">
                                <span>Hệ thống truyền lực</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">

                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="cap flex-around">
                                <span>Số chỗ ngồi</span>
                                <span><i class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="ct flex-col box-filter dropdown-content">

                            </div>
                        </div>

                        <div class="value-range">
                            Mức giá
                        </div>
                        <div class="flex-around value-range">
                            <div id="output1"></div>
                            <div id="output2"></div>

                        </div>
                        <div class="slidecontainer">

                            <input type="range" min="0" max="50000" value="10000" class="slider"
                                id="myRange1">
                            <input type="range" min="55000" max="100000" value="90000" class="slider"
                                id="myRange2">
                        </div>

                        <div class="filter-group text-center">
                            <div class="ct">
                                <button type="reset" class="btn-reset">Đặt lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="product">
                <div class="product-card1">
                    <div class="find-area filter-group">
                        <span class="btn-search" onclick="find()"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" placeholder="Tìm kiếm..." class="search input-filter" value="" />
                    </div>
                    <div class="filter-result1">

                        <div class="result3">
                            <i class="fa-solid fa-grid-2" style="color: #4da8da"></i>
                        </div>
                    </div>
                </div>
                <div id="list1"></div>

                <div class="pagination">
                    <button>
                        <span><i class="fa-solid fa-chevron-down fa-rotate-90"></i></span>
                    </button>
                    <button><span>1</span></button>
                    <button><span>2</span></button>
                    <button>
                        <span><i class="fa-solid fa-chevron-down fa-rotate-270"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        fetch('http://127.0.0.1:8000/api/allProduct')
            .then(res => res.json())
            .then(data => {
                localStorage.setItem('arrCar', JSON.stringify(data.data));
            })
        let arrCar = JSON.parse(localStorage.getItem('arrCar'));
        // let arrCar = [{
        //         tenXe: "Tesla Model 3 Stanrdard Range Plus",
        //         giaXe: 1410,
        //         hinhXe: "./img/Tesla.png",
        //         hangXe: "Telsa",
        //         namSX: "2021",
        //     },
        //     {
        //         tenXe: "FordFord F-250 Super Duly",
        //         giaXe: 2042,
        //         hinhXe: "./img/Ford.png",
        //         hangXe: "Ford",
        //         namSX: "2022",
        //     },
        //     {
        //         tenXe: "Honda Pilot Touring 7-Passenger",
        //         giaXe: 1076,
        //         hinhXe: "./img/Honda.png",
        //         hangXe: "Honda",
        //         namSX: "2022",
        //     },
        //     {
        //         tenXe: "Chevrolet Equinox LS",
        //         giaXe: 447,
        //         hinhXe: "./img/Chevrolet.png",
        //         hangXe: "Chevrolet",
        //         namSX: "2017",
        //     },
        //     {
        //         tenXe: "Kia Sorento S",
        //         giaXe: 740,
        //         hinhXe: "./img/Kia.png",
        //         hangXe: "Kia",
        //         namSX: "2021",
        //     },
        //     {
        //         tenXe: "Mini Clubman Cooper S",
        //         giaXe: 891,
        //         hinhXe: "./img/Mini_Cooper.png",
        //         hangXe: "Audi",
        //         namSX: "2022",
        //     },
        // ];
        var countCarDisplay = 0;

        // Tìm xe

        const searchInput = document.querySelector(".search");
        let searchValue = "";


        searchInput.addEventListener("input", function(e) {
            let newCar = [];
            let searchValue = e.target.value;
            newCar = arrCar.filter((item) =>
                item.tenXe
                .toLowerCase()
                .trim()
                .includes(searchValue.toLowerCase().trim())
            );
            console.log(newCar);
            if (searchValue) {

            }
            // else {
            //     arrCar = [{
            //             tenXe: "Tesla Model 3 Stanrdard Range Plus",
            //             giaXe: 1410,
            //             hinhXe: "./img/Tesla.png",
            //             hangXe: "Telsa",
            //             namSX: "2021",
            //         },
            //         {
            //             tenXe: "FordFord F-250 Super Duly",
            //             giaXe: 2042,
            //             hinhXe: "./img/Ford.png",
            //             hangXe: "Ford",
            //             namSX: "2022",
            //         },
            //         {
            //             tenXe: "Honda Pilot Touring 7-Passenger",
            //             giaXe: 1076,
            //             hinhXe: "./img/Honda.png",
            //             hangXe: "Honda",
            //             namSX: "2022",
            //         },
            //         {
            //             tenXe: "Chevrolet Equinox LS",
            //             giaXe: 447,
            //             hinhXe: "./img/Chevrolet.png",
            //             hangXe: "Chevrolet",
            //             namSX: "2017",
            //         },
            //         {
            //             tenXe: "Kia Sorento S",
            //             giaXe: 740,
            //             hinhXe: "./img/Kia.png",
            //             hangXe: "Kia",
            //             namSX: "2021",
            //         },
            //         {
            //             tenXe: "Mini Clubman Cooper S",
            //             giaXe: 891,
            //             hinhXe: "./img/Mini_Cooper.png",
            //             hangXe: "Audi",
            //             namSX: "2022",
            //         },
            //     ];
            // }
            if (newCar) {
                displayCar(newCar);
            }
        });
        displayCar(arrCar);

        function displayCar(arrCar = [], namSX_arr = [], hangXe_arr = []) {
            console.log(arrCar.length);
            var list1 = document.getElementById("list1");

            list1.innerHTML = "";
            if (arrCar.length < 0) return false;
            for (i = 0; i < arrCar.length; i++) {
                ten = arrCar[i].tenXe;
                hinh = arrCar[i].hinhXe[0]['url'];
                gia = arrCar[i].giaXe;
                nam = arrCar[i].namSX;
                hang = arrCar[i].hangXe;
                if (namSX_arr.length > 0) {
                    if (namSX_arr.includes(nam) == false) continue;
                    // Bỏ qua xe không có năm sản xuất trùng;
                }
                if (hangXe_arr.length > 0) {
                    if (hangXe_arr.includes(hang) == false) continue;
                }
                // Bỏ qua xe không cùng hãng;
                countCarDisplay++;
                list1.innerHTML += `
      <div class="product-card">
              <img src="{{ asset('storage') }}/${hinh}">
              <div class="product-info">
                  <div class="product-new">
                      <span>Xe mới</span>
                  </div>
                  <div class="product-name">
                      <span>${ten}</span>
                  </div>
                  <div class="product-price">
                      <span>₫${gia} triệu</span>
                  </div>
                  <div class="product-location">
                      <span>Quận 1, TP HCM</span>
                  </div>
                  <div class="product-status">
                      <div class="product-status1">
                          <i class="fa-solid fa-calendar-days" style="color: #007CC7;"></i><span
                              class="status">${nam}</span>
                      </div>
                      <div class="product-status2">
                          <i class="fa-solid fa-steering-wheel" style="color: #007CC7;"></i><span
                              class="status">Front-wheel Drive</span>
                      </div>
                      <div class="product-status3">
                          <i class="fa-solid fa-gas-pump" style="color: #007CC7;"></i><span
                              class="status">Xăng</span>
                      </div>
                      <div class="product-status4">
                          <i class="fa-solid fa-user-group" style="color: #007CC7;"></i><span class="status">5
                              chỗ</span>
                      </div>
                  </div>
                  <div class="product-line"></div>
                  <div class="product-rate">
                      <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                          class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                          class="fa-regular fa-star"></i>
                      <span>(12 đánh giá)</span>
                  </div>
              </div>
          </div>`;
            }
        }


        function chooseCar() {
            // Xem user chọn năm nào => namSX_arr
            var arr1 = document.getElementsByClassName("namSX");
            var namSX_arr = [];
            for (i = 0; i < arr1.length; i++) {
                if (arr1[i].checked == true) namSX_arr.push(arr1[i].value);
            }

            // Xem user chọn Hãng nào => hangXe_arr
            var arr2 = document.getElementsByClassName("hangXe");
            var hangXe_arr = [];
            for (i = 0; i < arr2.length; i++) {
                if (arr2[i].checked == true) hangXe_arr.push(arr2[i].value);
            }

            // Xem user chọn giá nào => giaXe_arr

            displayCar(namSX_arr, hangXe_arr);
        }

        // arr = document.getElementsByClassName('namSX');
        // for(i=0;i<arr.length;i++){
        //     arr[i].addEventListener("click",chooseCar)
        // }
        // arr = document.getElementsByClassName('hangXe');
        // for(i=0;i<arr.length;i++){
        //     arr[i].addEventListener("click",chooseCar)
        // }

        function find() {
            chooseCar();
        }

        const links = document.querySelectorAll(".dropbtn");
        const dropdown = document.querySelectorAll(".box-filter");

        dropdown.forEach((element) => {
            const height = element.offsetHeight;
            element.style.marginTop = `${-height}px`;
        });
        links.forEach((link) => {
            link.addEventListener("click", function(e) {
                const target = e.currentTarget;
                const ele = target.nextElementSibling;

                dropdown.forEach((element) => {
                    if (element !== ele) {
                        element.previousElementSibling.classList.remove(
                            "active"
                        );
                        // element.classList.remove("");
                    }
                });
                target.classList.toggle("active");
                ele.classList.toggle("box-filter");
            });
        });

        // Range
        var slider1 = document.getElementById("myRange1");

        var slider2 = document.getElementById("myRange2");

        var output1 = document.getElementById("output1");
        var output2 = document.getElementById("output2");
        output1.innerHTML = slider1.value; // Display the default slider value
        output2.innerHTML = slider2.value; // Display the default slider value
        // Display the default slider value
        // Update the current slider value (each time you drag the slider handle)
        slider1.oninput = function() {
            output1.innerHTML = this.value;
        };
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        };
    </script>
@endsection
