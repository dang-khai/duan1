@extends('users.master.master')

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/product-car.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="title-name-car-product">
            Tesla Model 3 Standard Range Plus
        </h1>
    </div>
    <!-- Title name car product end -->

    <!-- Breadcrumbs start -->
    <div class="container">
        <p class="breadcrumbs">
            <a href="">Trang Chủ</a> - <a href="">Xe Mới</a> -
            <a href="">Tesla Model 3 Standard Range Plus</a>
        </p>
    </div>
    <!-- Breadcrumbs end -->

    <!-- Slide show product start -->

    <div class="slide-show-product">
        <div class="slide-show-image">
            <span class="control-slide arrow-left">
                <img src="icon/akar-icons_chevron-left-product-car.svg" alt="" />
            </span>
            <span class="control-slide arrow-right">
                <img src="icon/akar-icons_chevron-right-product-car.svg" alt="" />
            </span>
            <div class="image-show-product"
                style="
              background-image: url('img/2022_Hyundai_Elantra_Hybrid.jpg');
          "></div>
        </div>
        <div class="container">
            <div class="list-img-show">
                <div class="img-show-mini"
                    style="
                  background-image: url('img/2022_Hyundai_Elantra_Hybrid.jpg');
              ">
                </div>
                <div class="img-show-mini"
                    style="
                  background-image: url('img/car-on-a-forest-path-photo.jpg');
              ">
                </div>
                <div class="img-show-mini" style="background-image: url('img/customer.png')"></div>
                <div class="img-show-mini"
                    style="
                  background-image: url('img/hinh-anh-xe-lamborghini-dep-nhat-34.jpg');
              ">
                </div>
                <div class="img-show-mini"
                    style="
                  background-image: url('img/hinh-anh-xe-oto-dep-3.jpg');
              "></div>
                <div class="img-show-mini"
                    style="
                  background-image: url('img/pexels-pixabay-358070.jpg');
              "></div>
                <div class="img-show-mini"
                    style="
                  background-image: url('img/suv-automobile-driving-through-foggy-and-rainy-forest-road-CAVF75458.jpg');
              ">
                </div>
            </div>
        </div>
    </div>
@endsection
