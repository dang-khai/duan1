<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    @yield('css')
</head>

<body>
    @include('admin.partial.dashboard')

    <div class="container-content">
        @yield('content')

        @yield('loading')

        @yield('js')
    </div>

    @if ($title == 'home')
        <script>
            document.querySelector('#admin-home').classList.add('active');
            document.querySelector('#admin-home').classList.remove('text-dark');
        </script>
    @elseif ($title == 'category')
        <script>
            document.querySelector('#admin-category').classList.add('active');
            document.querySelector('#admin-category').classList.remove('text-dark');
        </script>
    @elseif ($title == 'orders')
        <script>
            document.querySelector('#admin-orders').classList.add('active');
            document.querySelector('#admin-orders').classList.remove('text-dark');
        </script>
    @elseif ($title == 'product')
        <script>
            document.querySelector('#admin-product').classList.add('active');
            document.querySelector('#admin-product').classList.remove('text-dark');
        </script>
    @elseif ($title == 'customers')
        <script>
            document.querySelector('#admin-customers').classList.add('active');
            document.querySelector('#admin-customers').classList.remove('text-dark');
        </script>
    @endif

    @include('sweetalert::alert')
</body>

</html>
