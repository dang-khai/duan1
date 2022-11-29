<div class="slideshow-container">
    <header>
        <div class="container">
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
                                            <img class="ic_login" src="{{ asset('icon/bx_bxs-user.svg') }}"
                                                alt="" />
                                            Đăng nhập</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
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

    <div class="switch-button">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <div class="mySlides">
        <div class="img-slideshow" style="background-image: url('{{ asset('img/1.png') }}')"></div>
    </div>

    <div class="mySlides">
        <div class="img-slideshow" style="background-image: url('{{ asset('img/2.png') }}')"></div>
    </div>

    <div class="mySlides">
        <div class="img-slideshow" style="background-image: url('{{ asset('img/3.png') }}')"></div>
    </div>

    <div class="mySlides">
        <div class="img-slideshow" style="background-image: url('{{ asset('img/4.png') }}')"></div>
    </div>
    <script src="{{ asset('js/slideshow.js') }}"></script>
    <div class="filter">
        <form method="POST" action="">
            <div id="select-car" class="select-car">
                <a class="all-car text-select-car active-text-select-car">Tất cả</a>
                <a class="new-car text-select-car">Xe mới</a>
                <a class="old-car text-select-car">Xe cũ</a>
            </div>
            <div class="search-model-brand">
                <input type="search" class="search" placeholder="Tìm kiếm" />
                <select class="model" name="" id="">
                    <option value="">Dòng xe</option>
                </select>
                <select class="brand" name="" id="">
                    <option value="">Hãng xe</option>
                </select>
            </div>
            <div class="location-price-submit">
                <input type="text" name="" id="" class="location" placeholder="Địa điểm" />
                <div class="price">
                    <div class="values">
                        <span class="text-note-price">Mức Giá
                            <span class="note-price">(triệu)</span></span>
                        <br />
                        <span class="text-range">₫.<span id="range1">0</span> - ₫<span
                                id="range2">100</span></span>
                    </div>
                    <div class="scroll-bar">
                        <div class="slider-track">
                            <input type="range" min="0" max="9000" value="0" id="slider-1"
                                oninput="slideOne()" />
                            <input type="range" min="0" max="9000" value="9000" id="slider-2"
                                oninput="slideTwo()" />
                        </div>
                    </div>
                </div>
                <button class="submit" type="submit">Tìm kiếm</button>
            </div>
        </form>
        <script src="{{ asset('js/scroll-bar.js') }}"></script>
        <script src="{{ asset('js/select-car-active.js') }}"></script>
    </div>
</div>
