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
                    <li><a href="#">Xe mới</a></li>
                    <li><a href="#">Xe cũ</a></li>
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
                                <img class="ic_login" src="icon/bx_bxs-user.svg" alt="">
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
                <li><a href="#">Xe mới</a></li>
                <li><a href="#">Xe cũ</a></li>
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
                            <img class="ic_login" src="icon/bx_bxs-user.svg" alt="">
                            Đăng nhập
                        </a>
                    @endif
                @else
                    {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a> --}}
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
        </header>
    </div>
</div>

<script src="js/menu-mobile-show.js"></script>

<!-- End code header -->
