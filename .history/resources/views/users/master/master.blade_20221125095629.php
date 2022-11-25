<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/slick-slider/slick.css" />
    <link href="bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css" />
    @yield('css')
</head>

<body>
    @include('users.partial.header')

    @yield('content')

    @include('users.partial.footer')

    @yield('js')
</body>

</html>
