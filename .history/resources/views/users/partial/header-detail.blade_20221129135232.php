<header>
    <div class="container bg-header">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <a class="logo_header" href="{{ route('user_home') }}"><img src="{{ asset('img/car_logo2.png') }}"
                        alt="" /></a>
            </div>
            <div class="col-lg-7 col-md-8">
                <ul class="menu_header">
                    <li><a href="#">Xe mới</a></li>
                    <li><a href="#">Xe cũ</a></li>
                    <li><a href="#">Đấu giá xe</a></li>
                    <li><a href="#">Bán xe</a></li>
                    <li>
                        <a href="#">Kinh nghiệm
                            <img class="ic_exp" src="{{ asset('icon/akar-icons_chevron-down.svg') }}"
                                alt="" /></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-2">
                <div class="login-language_header">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <img class="ic_login" src="{{ asset('icon/bx_bxs-user.svg') }}" alt="" />
                                        Đăng nhập</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <div class="language">
                        <img class="ic_language" src="{{ asset('icon/clarity_world-line.svg') }}" alt="" />
                        VIE
                        <img class="ic_language-2" src="{{ asset('icon/akar-icons_chevron-down.svg') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
