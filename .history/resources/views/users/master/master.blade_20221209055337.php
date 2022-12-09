<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-slider/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @yield('css')
</head>

<body>
    @if (Route::current()->getName() == 'user_home' || Route::current()->getName() == 'home')
        @include('users.partial.header')
    @else
        @include('users.partial.header-detail')
    @endif

    @yield('content')

    @include('users.partial.footer')

    @yield('js')

    @include('sweetalert::alert')
</body>

</html>
