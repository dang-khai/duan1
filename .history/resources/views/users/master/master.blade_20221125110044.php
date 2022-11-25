<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-slider/slick.css') }}" />
    <link href="bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    @yield('css')
</head>

<body>
    @if (Route::current()->getName() == '/')
        @include('users.partial.header')
    @else
        @include('users.partial.header-detail')
    @endif

    @yield('content')

    @include('users.partial.footer')

    @yield('js')

    <script src="{{ asset('bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
