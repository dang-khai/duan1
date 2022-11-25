@extends('users.master.master')

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="container-center-recommended-car">
            <div class="recommended-car">
                <h2 class="text-title">Xe Được Đề Xuất</h2>
                <div id="select-new-old-car-filter" class="select-more">
                    <a onclick="filterSelection('newcarfilter')" class="new-car select-new-old-car active-new-old-car">Xe
                        mới</a>
                    <a onclick="filterSelection('oldcarfilter')" class="old-car select-new-old-car">Xe cũ</a>
                    <a class="more-car" href="">Xem thêm
                        <img src="icon/arrow-right-more.svg" alt="" /></a>
                </div>
                <div class="car-product">
                    <a href="" class="car-box newcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/Rectangle\ 98.png');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe mới</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="car-box newcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/car-on-a-forest-path-photo.jpg');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe mới</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="car-box newcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/Rectangle\ 110.png');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe mới</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="car-box newcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/pexels-pixabay-358070.jpg');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe mới</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="car-box oldcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/hinh-anh-xe-oto-dep-3.jpg');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe cũ</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="car-box oldcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/suv-automobile-driving-through-foggy-and-rainy-forest-road-CAVF75458.jpg');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe cũ</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="car-box oldcarfilter">
                        <div class="img-car-box-product"
                            style="
                            background-image: url('img/car-on-a-forest-path-photo.jpg');
                        ">
                        </div>
                        <div class="info-car">
                            <p class="status">Xe cũ</p>
                            <p class="name-car">
                                Tesla Model 3 Standard Range Plus
                            </p>
                            <p class="price-car">₫1 tỷ 410 triệu</p>
                            <p class="address-car">Quận 1, TP HCM</p>
                            <div class="year-drive">
                                <div class="year">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Rear-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat">
                                <div class="energy">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Điện</p>
                                </div>
                                <div class="seat">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="reviews">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <script src="js/filter-recommended-car.js"></script>
            </div>
        </div>
    </div>

    <!-- Recommended Car enđ -->

    <!-- Car comparison start -->

    <div class="container">
        <div class="container-center-car-comparison">
            <div class="car-comparison">
                <h2 class="text-title">So Sánh Xe</h2>
                <div class="info-comparison">
                    <a href="" class="car-box-2">
                        <div class="img-car-box-product-2"
                            style="
                            background-image: url('img/2022_Hyundai_Elantra_Hybrid.jpg');
                        ">
                        </div>
                        <div class="info-car-2">
                            <p class="status-2">Xe mới</p>
                            <p class="name-car-2">Ford F-250 Super Duty</p>
                            <p class="price-car-2">₫1 tỷ 410 triệu</p>
                            <p class="address-car-2">Quận 1, TP HCM</p>
                            <div class="year-drive-2">
                                <div class="year-2">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive-2">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Four-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat-2">
                                <div class="energy-2">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Dầu</p>
                                </div>
                                <div class="seat-2">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line-2"></div>
                            <div class="reviews-2">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                    <div class="and-comparison">
                        <div class="and-comparison-2">
                            <p>VS</p>
                        </div>
                    </div>
                    <a href="" class="car-box-2">
                        <div class="img-car-box-product-2"
                            style="
                            background-image: url('img/car-on-a-forest-path-photo.jpg');
                        ">
                        </div>
                        <div class="info-car-2">
                            <p class="status-2">Xe mới</p>
                            <p class="name-car-2">Ford F-250 Super Duty</p>
                            <p class="price-car-2">₫1 tỷ 410 triệu</p>
                            <p class="address-car-2">Quận 1, TP HCM</p>
                            <div class="year-drive-2">
                                <div class="year-2">
                                    <img src="icon/iwwa_year.svg" alt="" />
                                    <p>2021</p>
                                </div>
                                <div class="drive-2">
                                    <img src="icon/tabler_steering-wheel.svg" alt="" />
                                    <p>Four-wheel Drive</p>
                                </div>
                            </div>
                            <div class="energy-seat-2">
                                <div class="energy-2">
                                    <img src="icon/clarity_fuel-line.svg" alt="" />
                                    <p>Dầu</p>
                                </div>
                                <div class="seat-2">
                                    <img src="icon/bi_people.svg" alt="" />
                                    <p>5 chỗ</p>
                                </div>
                            </div>
                            <div class="line-2"></div>
                            <div class="reviews-2">
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star.svg" alt="" />
                                <img src="icon/star_border.svg" alt="" />
                                <p>(12 Đánh giá)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <button type="submit" class="compare-submit">
                    Tiến Hành So Sánh
                </button>
            </div>
        </div>
    </div>

    <!-- Car comparison end -->

    <!-- News Reviews start -->

    <div class="container">
        <div class="container-center-news-reviews">
            <div class="news-reviews">
                <div class="select-news-reviews">
                    <a class="select-snreviews" href="">Tin tức</a>
                    <a href="">Đánh giá xe</a>
                </div>
                <div class="box-news-reviews">
                    <a href="" class="box-news-reviews-1">
                        <img src="img/2022_Hyundai_Elantra_Hybrid.jpg" alt="" />
                        <div class="date-bnr1">
                            <p>28/06/2021</p>
                        </div>
                        <div class="content-bnr1">
                            <p class="title-cbnr1">Etiam Eget</p>
                            <p class="text-cbnr1">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Etiam eget praesent gravida
                                sed rutrum suspendisse eu.
                            </p>
                            <div class="poster-by">
                                <img src="img/top-hinh-nen-sieu-xe-57.jpg" alt="" />
                                <p>By Carla Baptista</p>
                            </div>
                        </div>
                    </a>
                    <div class="box-news-reviews-2">
                        <a href="" class="box-1-bnr2">
                            <img src="img/customer.png" alt="" />
                            <div class="content-b1bnr2">
                                <p class="title-cb1bnr2">A New Car</p>
                                <p class="text-cb1bnr2">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.
                                </p>
                                <div class="poster-by">
                                    <img src="img/top-hinh-nen-sieu-xe-57.jpg" alt="" />
                                    <p>By Carla Baptista - 28/06/2021</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="box-1-bnr2">
                            <img src="img/Rectangle 98.png" alt="" />
                            <div class="content-b1bnr2">
                                <p class="title-cb1bnr2">A New Car</p>
                                <p class="text-cb1bnr2">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.
                                </p>
                                <div class="poster-by">
                                    <img src="img/top-hinh-nen-sieu-xe-57.jpg" alt="" />
                                    <p>By Carla Baptista - 28/06/2021</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News Reviews end -->

    <!-- About us start -->

    <div class="container-2">
        <div class="container">
            <div class="container-center-about-us">
                <div class="about-us">
                    <h2 class="title-au">Về Chúng Tôi</h2>
                    <div class="content-box-au">
                        <div class="box-1-cta">
                            <p class="text-b1cta">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. In vel aliquet tortor ut
                                sit sit. Velit imperdiet integer elementum a
                                scelerisque pulvinar venenatis sodales. Quis
                                nulla euismod feugiat at interdum in.
                                Venenatis arcu semper lectus quis sit in
                                rhoncus auctor.
                            </p>
                            <div class="ctn-1-b1cta">
                                <div class="b-c1b">
                                    <p class="number-bc1b">150</p>
                                    <div class="line-1-bc1b"></div>
                                    <div class="line-2-bc1b"></div>
                                    <p class="text-bc1b">Xe Còn Hàng</p>
                                </div>
                                <div class="b-c1b">
                                    <p class="number-bc1b">40</p>
                                    <div class="line-1-bc1b"></div>
                                    <div class="line-2-bc1b"></div>
                                    <p class="text-bc1b">Xe Đã Bán</p>
                                </div>
                            </div>
                            <div class="ctn-1-b1cta">
                                <div class="b-c1b">
                                    <p class="number-bc1b">38</p>
                                    <div class="line-1-bc1b"></div>
                                    <div class="line-2-bc1b"></div>
                                    <p class="text-bc1b">Khách Hài Lòng</p>
                                </div>
                                <div class="b-c1b">
                                    <p class="number-bc1b">5</p>
                                    <div class="line-1-bc1b"></div>
                                    <div class="line-2-bc1b"></div>
                                    <p class="text-bc1b">Giải Thưởng</p>
                                </div>
                            </div>
                        </div>
                        <div class="image-about-us"
                            style="
                            background-image: url('img/hinh-anh-xe-lamborghini-dep-nhat-34.jpg');
                        ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About us end -->

    <!-- Service selection start -->

    <div class="container">
        <div class="container-center-service-selection">
            <div class="service-selection">
                <h2 class="title-service-selection">Lựa Chọn Dịch Vụ</h2>
                <div class="select-service-selection">
                    <a class="box-select-ss" href="">
                        <img src="icon/ion_car-sport-outline.svg" alt="" />
                        <p>Mua xe mới</p>
                    </a>
                    <a class="box-select-ss" href="">
                        <img src="icon/la_car.svg" alt="" />
                        <p>Mua xe cũ</p>
                    </a>
                    <a class="box-select-ss" href="">
                        <img src="icon/ic_outline-sell.svg" alt="" />
                        <p>Bán xe</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Service selection end -->

    <!-- Testimonial start -->

    <div class="testimonial">
        <h2 class="title-testimonial">Nhận Xét Từ Khách Hàng</h2>
        <div class="testimonial-scroll">
            <div class="box-testimonial">
                <div class="arrow-testimonial"></div>
                <div class="content-btestimonial">
                    <img class="arrow-cbtest" src="icon/Polygon.svg" alt="" />
                    <img class="picture-customer" src="img/customer.png" alt="" />
                    <div class="text-content-btestimonial">
                        <p class="name-customer">Omar Mango</p>
                        <p class="role-tcb">Khách hàng</p>
                        <p class="text-tcb">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. In vel aliquet tortor ut sit
                            sit. Velit imperdiet integer elementum a
                            scelerisque pulvinar venenatis sodales. Quis
                            nulla euismod feugiat at interdum in. Venenatis
                            arcu semper lectus quis sit in rhoncus auctor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-testimonial">
                <div class="arrow-testimonial"></div>
                <div class="content-btestimonial">
                    <img class="arrow-cbtest" src="icon/Polygon.svg" alt="" />
                    <img class="picture-customer" src="img/customer.png" alt="" />
                    <div class="text-content-btestimonial">
                        <p class="name-customer">Omar Mango</p>
                        <p class="role-tcb">Khách hàng</p>
                        <p class="text-tcb">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. In vel aliquet tortor ut sit
                            sit. Velit imperdiet integer elementum a
                            scelerisque pulvinar venenatis sodales. Quis
                            nulla euismod feugiat at interdum in. Venenatis
                            arcu semper lectus quis sit in rhoncus auctor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-testimonial">
                <div class="arrow-testimonial"></div>
                <div class="content-btestimonial">
                    <img class="arrow-cbtest" src="icon/Polygon.svg" alt="" />
                    <img class="picture-customer" src="img/customer.png" alt="" />
                    <div class="text-content-btestimonial">
                        <p class="name-customer">Omar Mango</p>
                        <p class="role-tcb">Khách hàng</p>
                        <p class="text-tcb">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. In vel aliquet tortor ut sit
                            sit. Velit imperdiet integer elementum a
                            scelerisque pulvinar venenatis sodales. Quis
                            nulla euismod feugiat at interdum in. Venenatis
                            arcu semper lectus quis sit in rhoncus auctor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-testimonial">
                <div class="arrow-testimonial"></div>
                <div class="content-btestimonial">
                    <img class="arrow-cbtest" src="icon/Polygon.svg" alt="" />
                    <img class="picture-customer" src="img/customer.png" alt="" />
                    <div class="text-content-btestimonial">
                        <p class="name-customer">Omar Mango</p>
                        <p class="role-tcb">Khách hàng</p>
                        <p class="text-tcb">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. In vel aliquet tortor ut sit
                            sit. Velit imperdiet integer elementum a
                            scelerisque pulvinar venenatis sodales. Quis
                            nulla euismod feugiat at interdum in. Venenatis
                            arcu semper lectus quis sit in rhoncus auctor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-testimonial">
                <div class="arrow-testimonial"></div>
                <div class="content-btestimonial">
                    <img class="arrow-cbtest" src="icon/Polygon.svg" alt="" />
                    <img class="picture-customer" src="img/customer.png" alt="" />
                    <div class="text-content-btestimonial">
                        <p class="name-customer">Omar Mango</p>
                        <p class="role-tcb">Khách hàng</p>
                        <p class="text-tcb">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. In vel aliquet tortor ut sit
                            sit. Velit imperdiet integer elementum a
                            scelerisque pulvinar venenatis sodales. Quis
                            nulla euismod feugiat at interdum in. Venenatis
                            arcu semper lectus quis sit in rhoncus auctor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-slick-slider/jquery-1.11.0.min.js"></script>
        <script src="js/jquery-slick-slider/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-slick-slider/slick.min.js"></script>
        <script src="js/testimonial.js"></script>
    </div>

    <!-- Testimonial end -->

    <!-- Form Contact start -->

    <div class="form-contact">
        <div class="container-center-form-contact">
            <div class="container-form-contact">
                <div class="map-cfc">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.455157251696!2d106.62735075098293!3d10.85294436070495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b161f50ae47%3A0x2328d1d1acc3b11a!2sFPT%20Polytechnic%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1668855640930!5m2!1svi!2s"
                        width="800" height="600" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <form class="form-cfc" action="" method="post">
                    <h2 class="title-form-contact">Liên Hệ</h2>
                    <p class="text-top-input first-text-ti">Tên Của Bạn</p>
                    <input class="input-form-ct1" type="text" name="" id=""
                        placeholder="Nhập Họ và Tên" />
                    <p class="text-top-input">Email</p>
                    <input class="input-form-ct1" type="email" name="" id=""
                        placeholder="Nhập Email" />
                    <p class="text-top-input">Số Điện Thoại</p>
                    <input class="input-form-ct1" type="text" name="" id=""
                        placeholder="Nhập Số Điện Thoại" />
                    <p class="text-top-input">Lời Nhắn</p>
                    <textarea placeholder="Để lại tin nhắn ở đây"></textarea>
                    <button class="submit-form-contact" type="submit">
                        Gửi
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Form Contact end -->

    <!-- Partner image start -->

    <div class="container">
        <div class="container-center-partner-image">
            <div class="partner-image">
                <div class="box-partner-img">
                    <img src="img/Tesla_logo.png" alt="" />
                </div>
                <div class="box-partner-img">
                    <img src="img/Audi_logo.png" alt="" />
                </div>
                <div class="box-partner-img">
                    <img src="img/Fiat_logo.png" alt="" />
                </div>
                <div class="box-partner-img">
                    <img src="img/Huyendai_logo.png" alt="" />
                </div>
                <div class="box-partner-img">
                    <img src="img/Peugeot_logo.png" alt="" />
                </div>
                <div class="box-partner-img">
                    <img src="img/Volvo_logo.png" alt="" />
                </div>
            </div>
        </div>
    </div>
@endsection
