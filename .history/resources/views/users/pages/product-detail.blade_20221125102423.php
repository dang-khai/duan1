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
                <img src="{{ asset('icon/akar-icons_chevron-left-product-car.svg') }}" alt="" />
            </span>
            <span class="control-slide arrow-right">
                <img src="{{ asset('icon/akar-icons_chevron-right-product-car.svg') }}" alt="" />
            </span>
            <div class="image-show-product"
                style="
              background-image: url('{{ asset('img/2022_Hyundai_Elantra_Hybrid.jpg') }}');
          ">
            </div>
        </div>
        <div class="container">
            <div class="list-img-show">
                <div class="img-show-mini"
                    style="
                  background-image: url('{{ asset('img/2022_Hyundai_Elantra_Hybrid.jpg') }}');
              ">
                </div>
                <div class="img-show-mini"
                    style="
                  background-image: url('{{ asset('img/car-on-a-forest-path-photo.jpg') }}');
              ">
                </div>
                <div class="img-show-mini" style="background-image: url('{{ asset('img/customer.png') }}')"></div>
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
    <div class="container">
        <div class="car-information">
            <div class="car-information-block-1">
                <div class="car-description">
                    <h3 class="car-description-title">Mô tả xe</h3>
                    <div class="content-description" onclick="this.classList.add('expanded')">
                        <p class="content-description-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Maecenas diam nam eu nulla a.
                            Vestibulum aliquet facilisi interdum nibh
                            blandit. Leo amet ultricies cum cras sit sed
                            curabitur ultrices faucibus. Ultrices
                            pellentesque ultricies semper leo maecenas.
                            Amet, et sagittis consectetur at euismod
                            iaculis. <br />
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Maecenas diam nam eu nulla a.
                            Vestibulum aliquet facilisi interdum nibh
                            blandit. Leo amet ultricies cum cras sit sed
                            curabitur ultrices faucibus. Ultrices
                            pellentesque ultricies semper leo maecenas.
                            Amet, et sagittis consectetur at euismod
                            iaculis. <br />
                            Id non velit auctor p Id non velit auctor
                            praesent a amet risus facilisis. Lobortis nisl
                            placerat orci, eu nisl ornare. Eu vitae
                            pellentesque rhoncus eros vivamus est purus enim
                            dui. Leo ac pharetra massa tristique. Libero
                            aliquam pellentesque laoreet dui pulvinar
                            facilisis. Id lectus mauris senectus sodales
                            porta malesuada tincidunt et. Quam dui nulla
                            venenatis suscipit nulla lectus volutpat, augue
                            purus. Sed condimentum parturient maecenas
                            viverra pulvinar leo augue nunc.
                        </p>
                        <a class="read-more">Đọc thêm</a>
                    </div>
                </div>
                <div class="car-features">
                    <h3 class="car-features-title">Tính năng</h3>
                    <div class="content-car-features" onclick="this.classList.add('expanded')">
                        <div class="box-content-car-features">
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    Tự động lái
                                </span>
                            </div>
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    Triệu hồi
                                </span>
                            </div>
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    Tự đỗ xe
                                </span>
                            </div>
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    Tự động đổi làn
                                </span>
                            </div>
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    Màn hình cảm ứng 15 inch
                                </span>
                            </div>
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    360° Camera
                                </span>
                            </div>
                            <div class="box-features">
                                <img src="icon/check_box.svg" alt="" />
                                <span class="name-box-features">
                                    12 Cảm biến siêu âm
                                </span>
                            </div>
                        </div>
                        <a class="read-more-box-car-features">Xem thêm</a>
                    </div>
                </div>
                <div class="agent-information">
                    <h3 class="agent-information-title">
                        Thông tin đại lý
                    </h3>
                    <div class="box-agent-information">
                        <div class="avatar-name">
                            <img src="img/customer.png" alt="" />
                            <div class="information-agent">
                                <p class="name-information">Hai Nguyen</p>
                                <p class="office-information">Đại lý</p>
                            </div>
                        </div>
                        <div class="phone-agent">
                            <img src="icon/akar-icons_phone.svg" alt="" />
                            <p class="phone-number-agent">
                                +84 823.787.551
                            </p>
                        </div>
                        <div class="email-agent">
                            <img src="icon/carbon_email.svg" alt="" />
                            <p class="email-text-agent">nhai68@gmail.com</p>
                        </div>
                    </div>
                </div>
                <form class="form-contact" action="" method="post">
                    <div class="title-form-contact">Liên hệ</div>
                    <div class="form-input">
                        <div class="input-name">
                            <p class="title-input-name">Tên của bạn</p>
                            <input type="text" name="" id="" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="input-name">
                            <p class="title-input-name">Email</p>
                            <input type="email" name="" id="" placeholder="Nhập email" />
                        </div>
                        <div class="input-name">
                            <p class="title-input-name">Số điện thoại</p>
                            <input type="text" name="" id="" placeholder="Nhập số điện thoại" />
                        </div>
                        <div class="input-name">
                            <p class="title-input-name">Tiêu đề</p>
                            <select name="" id="">
                                <option value="">Chọn tiêu đề</option>
                            </select>
                        </div>
                        <div class="input-name">
                            <p class="title-input-name">Email</p>
                            <textarea placeholder="Để lại tin nhắn ở đây" name="" id=""></textarea>
                        </div>
                        <button type="submit">Liên hệ với Đại Lý</button>
                    </div>
                </form>
                <div class="location-map">
                    <h3 class="title-location-map">Địa điểm</h3>
                    <p class="location-material">
                        Toà nhà Innovation, lô 24, Công viên QTSC, Quận 12,
                        TP Hồ Chí Minh
                    </p>
                    <div class="map-link">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.455157251696!2d106.62735075098296!3d10.852944360704951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2328d1d1acc3b11a!2sFPT%20Polytechnic%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1669225938550!5m2!1svi!2s"
                            width="800" height="600" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="car-information-block-2">
                <div class="price-car">
                    <p>₫1 tỷ 410 triệu</p>
                </div>
                <div class="vehicle-details">
                    <div class="block-vehicle-details">
                        <h3 class="title-block-vd">Chi tiết xe</h3>
                        <div class="text-block-vehicle">
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Hãng Xe</p>
                                <p class="text-right-block-vd">Tesla</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Dòng Xe</p>
                                <p class="text-right-block-vd">Model 3</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Tình Trạng</p>
                                <p class="text-right-block-vd">Xe mới</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Năm SX</p>
                                <p class="text-right-block-vd">2019</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Kiểu Thân Xe
                                </p>
                                <p class="text-right-block-vd">Sedan</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Số Chỗ Ngồi
                                </p>
                                <p class="text-right-block-vd">5 chỗ</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Màu Xe</p>
                                <p class="text-right-block-vd">Đỏ</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-vehicle-details">
                        <h3 class="title-block-vd">Động Cơ</h3>
                        <div class="text-block-vehicle">
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Loại Nhiên Liệu
                                </p>
                                <p class="text-right-block-vd">Điện</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Số Km Đã Chạy
                                </p>
                                <p class="text-right-block-vd">340 km</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Loại Hộp Số
                                </p>
                                <p class="text-right-block-vd">Tự động</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Hệ Thống Truyền Lực
                                </p>
                                <p class="text-right-block-vd">
                                    Rear-wheel Drive
                                </p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Mã Lực</p>
                                <p class="text-right-block-vd">
                                    283 hp (211 kW)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="block-vehicle-details">
                        <h3 class="title-block-vd">Pin Và Sạc</h3>
                        <div class="text-block-vehicle">
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Dung Lượng Pin
                                </p>
                                <p class="text-right-block-vd">55.0-kWh</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Tốc Độ Sạc</p>
                                <p class="text-right-block-vd">64 km/h</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Cổng Sạc</p>
                                <p class="text-right-block-vd">Type 2</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">
                                    Thời Gian Sạc (0->Đầy)
                                </p>
                                <p class="text-right-block-vd">330 phút</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-vehicle-details">
                        <h3 class="title-block-vd">Kích Thước</h3>
                        <div class="text-block-vehicle">
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Chiều Dài</p>
                                <p class="text-right-block-vd">4694 mm</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Chiều Rộng</p>
                                <p class="text-right-block-vd">1849 mm</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Chiều Cao</p>
                                <p class="text-right-block-vd">1443 mm</p>
                            </div>
                            <div class="text-1-block-vd">
                                <p class="text-left-block-vd">Dung Tích</p>
                                <p class="text-right-block-vd">542 L</p>
                            </div>
                        </div>
                    </div>
                    <div class="vehicle-history">
                        <a href="">Lịch Sử Phương Tiện</a>
                        <img src="icon/akar-icons_arrow-up-right.svg" alt="" />
                    </div>
                    <div class="reviews-product">
                        <div class="star">
                            <img src="icon/star_product.svg" alt="" />
                            <img src="icon/star_product.svg" alt="" />
                            <img src="icon/star_product.svg" alt="" />
                            <img src="icon/star_product.svg" alt="" />
                            <img src="icon/star_border_product.svg" alt="" />
                        </div>
                        <p>(12 Đánh giá)</p>
                    </div>
                    <div class="car-comparison">
                        <img src="icon/compare_arrows.svg" alt="" />
                        <p>So Sánh Xe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Car information end -->

    <!-- Loan interest calculation start -->

    <div class="container">
        <div class="loan-interest-calculation">
            <h3 class="title-loan-interest-calculation">
                Tính toán lãi vay
            </h3>
            <div class="box-interest-calculation">
                <div class="input-box-interest">
                    <div class="box">
                        <p class="title-box">Giá xe</p>
                        <input type="text" onchange="calculatePayments()"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            id="vehiclePrice" name="" />
                    </div>
                    <div class="box" style="margin-left: 24px">
                        <p class="title-box">Lãi suất (%)</p>
                        <input type="text" onchange="calculatePayments()"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            id="intRate" name="" />
                    </div>
                    <div class="box" style="margin-top: 23px">
                        <p class="title-box">Thời gian vay (tháng)</p>
                        <input type="text" onchange="calculatePayments()"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            id="loanTerm" name="" />
                    </div>
                    <div class="box" style="margin-left: 24px; margin-top: 23px">
                        <p class="title-box">Tiền trả trước</p>
                        <input type="text" onchange="calculatePayments()"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            id="downPayment" name="" />
                    </div>
                </div>
                <div id="paymentResults" class="output-box-interest">
                    <p class="title-output">Thanh Toán Hàng Tháng</p>
                    <div class="line-1-output-box-interest"></div>
                    <div class="line-2-output-box-interest"></div>
                    <p id="results" class="value-output"></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function calculatePayments() {
            var vehiclePrice =
                document.getElementById("vehiclePrice").value,
                loanTerm = document.getElementById("loanTerm").value,
                intRate = document.getElementById("intRate").value,
                downPayment = document.getElementById("downPayment").value,
                amount = parseInt(vehiclePrice),
                months = parseInt(loanTerm),
                down = parseInt(downPayment),
                totalDown = down;
            (annInterest = parseFloat(intRate)),
            (monInt = annInterest / 1200);

            var calc = (
                (monInt + monInt / (Math.pow(1 + monInt, months) - 1)) *
                (amount - (totalDown || 0))
            ).toFixed(2);

            var paymentResults = document.getElementById("paymentResults");
            var results = document.getElementById("results");
            results.innerText = calc;
        }
    </script>
@endsection
