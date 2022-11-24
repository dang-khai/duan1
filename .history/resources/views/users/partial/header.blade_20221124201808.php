<header>
    <a class="logo_header" href="{{ route('user_home') }}"><img src="{{ asset('storage/img/car_logo.png') }}"
            alt=""></a>
    <ul class="menu_header">
        <li><a href="#">Xe mới</a></li>
        <li><a href="#">Xe cũ</a></li>
        <li><a href="#">Đấu giá xe</a></li>
        <li><a href="#">Bán xe</a></li>
        <li><a href="#">Kinh nghiệm <img class="ic_exp" src="{{ asset('storage/icon/Group.svg') }}"
                    alt=""></a>
        </li>
    </ul>
    <div class="login-language_header">
        <a class="login" href="{{ route('login') }}">
            <img class="ic_login" src="{{ asset('storage/icon/Vector.svg') }}" alt="">
            <p class="text_login">Đăng nhập</p>
        </a>
        <div class="language">
            <img class="ic_language" src="{{ asset('storage/icon/clarity_world-line.svg') }}" alt="">
            <p class="text_language">VIE</p>
            <img class="ic_language-2" src="{{ asset('storage/icon/Group.svg') }}" alt="">
        </div>
    </div>
</header>
