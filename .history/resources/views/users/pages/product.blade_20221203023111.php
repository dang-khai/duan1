@extends('users.master.master')

@section('title', 'Product')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/new-car.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://github.com/jquery/jquery/blob/master/src/css/hiddenVisibleSelectors.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.3/rangeslider.min.css"></script>
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
