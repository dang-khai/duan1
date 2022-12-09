<div class="header-container">
    <div class="container">
        <header>
            <div id="menu_header_mobile" class="menu_header_mobile">
                <img src="icon/bx_bx-menu.svg" alt="">
            </div>
            <div id="menu-header-mobile-select" class="menu-header-mobile-select">
                <img id="clear-menu-mobile" class="clear" src="icon/clear.svg" alt="">
                <div class="mobile-link-mxh">
                    <a href=""><img src="icon/facebook.svg" alt=""></a>
                    <a href=""><img src="icon/instagram.svg" alt=""></a>
                    <a href=""><img src="icon/youtube.svg" alt=""></a>
                </div>
                <ul>
                    <li><a href="{{ route('product') }}">Xe mới</a></li>
                    <li><a href="{{ route('product') }}">Xe cũ</a></li>
                    <li><a href="#">Đấu giá xe</a></li>
                    <li><a href="#">Bán xe</a></li>
                    <li><a href="#">
                            <p>Kinh nghiệm</p>
                        </a> </li>
                </ul>
                <div class="login-language_header_mobile">
                    @guest
                        @if (Route::has('get.login'))
                            <a class="login" href="{{ route('get.login') }}">
                                <img class="ic_login" src="{{ asset('icon/bx_bxs-user.svg') }}" alt="">
                                Đăng nhập
                            </a>
                        @endif
                    @else
                        <a class="login" style="cursor: pointer">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="logout">
                            <a class="login" style="cursor: pointer"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                    <div class="language">
                        <img class="ic_language" src="icon/clarity_world-line.svg" alt="">
                        VIE
                        <img class="ic_language-2" src="icon/akar-icons_chevron-down.svg" alt="">
                    </div>
                </div>

            </div>
            <a class="logo_header" href="{{ route('user_home') }}"><img src="img/car_logo2.png" alt=""></a>
            <div class="notification_mobile">
                <img src="icon/codicon_bell-dot.svg" alt="">
            </div>
            <ul class="menu_header">
                <li><a href="{{ route('product') }}">Xe mới</a></li>
                <li><a href="{{ route('product') }}">Xe cũ</a></li>
                <li><a href="#">Đấu giá xe</a></li>
                <li><a href="#">Bán xe</a></li>
                <li><a class="drop-down" href="#">
                        <p>Kinh nghiệm</p> <img class="ic_exp" src="icon/akar-icons_chevron-down.svg" alt="">
                    </a> </li>
            </ul>
            <div class="login-language_header">
                @guest
                    @if (Route::has('get.login'))
                        <a class="login" href="{{ route('get.login') }}">
                            <img class="ic_login" src="{{ asset('icon/bx_bxs-user.svg') }}" alt="">
                            Đăng nhập
                        </a>
                    @endif
                @else
                    <a onclick="showLoginUser()" id="login-user" class="login-user">
                        <img class="ic_login" src="{{ asset('icon/bx_bxs-user.svg') }}" alt="">
                        {{ Auth::user()->name }}
                    </a>
                    <div id="drop-down-login-user" class="drop-down-login-user">
                        <div class="drop-down-login-user-ar1"></div>
                        <div class="drop-down-login-user-content">
                            <img class="ic_login_user" src="{{ asset('icon/user-profile-square.svg') }}" alt="">
                            <p class="name-login-user">{{ Auth::user()->name }}</p>
                            <hr>
                            @if (Auth::user()->role == '1')
                                <a href="{{ route('admin_home') }}" class="manage-account">
                                    <img src="{{ asset('icon/Setting_fill.svg') }}" alt="">
                                    <p class="text-manage-account">
                                        Quản lý
                                    </p>
                                </a>
                            @endif
                            <a id="your-notification" class="manage-account">
                                <img src="{{ asset('icon/Bell_fill.svg') }}" alt="">
                                <p class="text-manage-account">
                                    Thông báo dành cho bạn
                                </p>
                            </a>
                            <a class="manage-account"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <img src="{{ asset('icon/logout-02.svg') }}" alt="">
                                <p class="text-manage-account">
                                    Đăng xuất
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <script>
                        function showLoginUser() {
                            document
                                .getElementById("drop-down-login-user")
                                .classList.toggle("show");
                        }
                        window.onclick = function(event) {
                            if (!event.target.matches(".login-user")) {
                                var dropdowns =
                                    document.getElementsByClassName(
                                        "drop-down-login-user"
                                    );
                                var i;
                                for (i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (
                                        openDropdown.classList.contains(
                                            "show"
                                        )
                                    ) {
                                        openDropdown.classList.remove(
                                            "show"
                                        );
                                    }
                                }
                            }
                        };
                    </script>
                    {{-- <div class="logout">
                        <a class="login" style="cursor: pointer"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Đăng xuất
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                            @csrf
                        </form>
                    </div> --}}
                @endguest
                <div class="language">
                    <img class="ic_language" src="icon/clarity_world-line.svg" alt="">
                    VIE
                    <img class="ic_language-2" src="icon/akar-icons_chevron-down.svg" alt="">
                </div>
            </div>
        </header>
    </div>
</div>

<script src="js/menu-mobile-show.js"></script>

<!-- End code header -->

<div class="slideshow-container">
    <div class="switch-button">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <div class="mySlides ">
        <div class="img-slideshow" style="background-image: url('img/1.png');"></div>
    </div>

    <div class="mySlides ">
        <div class="img-slideshow" style="background-image: url('img/2.png');"></div>
    </div>

    <div class="mySlides ">
        <div class="img-slideshow" style="background-image: url('img/3.png');"></div>
    </div>

    <div class="mySlides ">
        <div class="img-slideshow" style="background-image: url('img/4.png');"></div>
    </div>

    <script src="js/slideshow.js"></script>

</div>

<!-- Start code filter -->

<div class="container-filter">
    <div class="filter container">
        <form action="" method="post">
            <div id="select-car" class="select-car">
                <a class="all-car text-select-car active-text-select-car">Tất cả</a>

                <a class="new-car text-select-car">Xe mới</a>

                <a class="old-car text-select-car">Xe cũ</a>

            </div>
            <div class="search-model-brand">
                <input type="search" class="search" placeholder="Tìm kiếm">
                <select class="model" name="" id="">
                    <option value="">Dòng xe</option>
                </select>
                <select class="brand" name="" id="">
                    <option value="">Hãng xe</option>
                </select>
            </div>
            <div class="location-price-submit">
                <input type="text" name="" id="" class="location" placeholder="Địa điểm">
                <div class="price">
                    <div class="values">
                        <span class="text-note-price">Mức Giá </span> <br>
                        <span class="text-range">₫.<span id="range1">0</span> - ₫<span
                                id="range2">100</span></span>
                    </div>
                    <div class="scroll-bar">
                        <div class="slider-track">
                            <input type="range" min="0" max="9000" value="0" id="slider-1"
                                oninput="slideOne()">
                            <input type="range" min="0" max="9000" value="9000" id="slider-2"
                                oninput="slideTwo()">
                        </div>
                    </div>
                </div>
                <button class="submit" type="submit">Tìm kiếm</button>
            </div>
        </form>
        <script src="js/scroll-bar.js"></script>
        <script src="js/select-car-active.js"></script>
    </div>
</div>


<div class="container">
    <form action="" method="post">
        <div class="search-filter-mobile">
            <input type="search" class="search-mobile" placeholder="Tìm kiếm">
            <img src="icon/filter-icon.svg" alt="">
        </div>
    </form>
</div>

<!-- End code filter -->

<!-- Start code slide show mobile -->

<div class="container">
    <div class="slideshow-container-mobile">
        <div class="switch-button-mobile">
            <span class="dot-mobile" onclick="currentSlideMobile(1)"></span>
            <span class="dot-mobile" onclick="currentSlideMobile(2)"></span>
            <span class="dot-mobile" onclick="currentSlideMobile(3)"></span>
            <span class="dot-mobile" onclick="currentSlideMobile(4)"></span>
        </div>

        <div class="mySlides-mobile ">
            <div class="img-slideshow-mobile" style="background-image: url('img/1.png');"></div>
        </div>

        <div class="mySlides-mobile ">
            <div class="img-slideshow-mobile" style="background-image: url('img/2.png');"></div>
        </div>

        <div class="mySlides-mobile ">
            <div class="img-slideshow-mobile" style="background-image: url('img/3.png');"></div>
        </div>

        <div class="mySlides-mobile ">
            <div class="img-slideshow-mobile" style="background-image: url('img/4.png');"></div>
        </div>

        <script src="js/slideshow-mobile.js"></script>

    </div>
</div>

<!-- End code slide show mobile -->

<!-- End code slide-show -->
<div class="notification close">
    <div class="notification-icon"><i class="fa-solid fa-xmark"></i></div>
    <h1 class="notification-title">Thông báo của bạn</h1>
    <div class="notification-content">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Lời nhắn</th>
                    <th>Trạng thái</th>
                    <th>Thời gian xác nhận</th>
                </tr>
            </thead>
            <tbody id="data">
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Mark@gmail.com</td>
                    <td>123456789</td>
                    <td>46 Dương Quảng Hàm, P.5, Q.Gò Vấp, TP.HCM</td>
                    <td>Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn Mua xe nha bạn </td>
                    <td>Đã được xác nhận</td>
                    <td>09/12/2022</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "{{ route('orders.index') }}",
            type: 'GET',
            cache: false,
            dataType: 'JSON',
            success: function(data) {
                let list = data.data;
                let html = '';
                let index = 1;
                list.forEach(element => {
                    html += `<tr>
                                    <th scope="row">${index++}</th>
                                    <td>${element.name}</td>
                                    <td>${element.email}</td>
                                    <td style="width:11%">${element.phone}</td>
                                    <td>${element.address}</td>
                                    <td>${element.notes}</td>
                                    <td style="width:15%">${element.status}</td>
                                </tr>`;
                });
                $('#data').html(html);
            }
        })
    });
</script>
