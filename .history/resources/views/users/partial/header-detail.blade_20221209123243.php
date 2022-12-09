<div class="header-container">
    <div class="container">
        <header>
            <div id="menu_header_mobile" class="menu_header_mobile">
                <img src="{{ asset('icon/bx_bx-menu.svg') }}" alt="">
            </div>
            <div id="menu-header-mobile-select" class="menu-header-mobile-select">
                <img id="clear-menu-mobile" class="clear" src="{{ asset('icon/clear.svg') }}" alt="">
                <div class="mobile-link-mxh">
                    <a href=""><img src="{{ asset('icon/facebook.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('icon/instagram.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('icon/youtube.svg') }}" alt=""></a>
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
                        <img class="ic_language" src="{{ asset('icon/clarity_world-line.svg') }}" alt="">
                        VIE
                        <img class="ic_language-2" src="{{ asset('icon/akar-icons_chevron-down.svg') }}"
                            alt="">
                    </div>
                </div>

            </div>
            <a class="logo_header" href="{{ route('user_home') }}"><img src="{{ asset('img/car_logo2.png') }}"
                    alt=""></a>
            <div class="notification_mobile">
                <img src="{{ asset('icon/codicon_bell-dot.svg') }}" alt="">
            </div>
            <ul class="menu_header">
                <li><a href="{{ route('product') }}">Xe mới</a></li>
                <li><a href="{{ route('product') }}">Xe cũ</a></li>
                <li><a href="#">Đấu giá xe</a></li>
                <li><a href="#">Bán xe</a></li>
                <li><a class="drop-down" href="#">
                        <p>Kinh nghiệm</p> <img class="ic_exp" src="{{ asset('icon/akar-icons_chevron-down.svg') }}"
                            alt="">
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
                @endguest
                <div class="language">
                    <img class="ic_language" src="{{ asset('icon/clarity_world-line.svg') }}" alt="">
                    VIE
                    <img class="ic_language-2" src="{{ asset('icon/akar-icons_chevron-down.svg') }}" alt="">
                </div>
            </div>
        </header>
    </div>
</div>

<script src="{{ asset('js/menu-mobile-show.js') }}"></script>

<!-- End code header -->
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
            <tbody id="data"></tbody>
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
                                    <td>${element.note}</td>
                                    <td style="width:15%">${element.status}</td>
                                    <td>09/12/2022</td>
                                </tr>`;
                });
                $('#data').html(html);
            }
        })
    });
</script>
