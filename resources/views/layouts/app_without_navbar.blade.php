<!-- resources/views/layouts/app_without_navbar.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- FAV ICON -->
    <link rel="icon" href="{{ asset('logo-circle.png') }}" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Petode
    </title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body style="background-color: #f1f1f1">
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
</body>
</html>
