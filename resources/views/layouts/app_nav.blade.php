<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" href="{{ asset('logo-circle.png') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Petode</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Styles -->
  <style>
            /* Additional CSS for font size adjustment */
            h2 {
            font-size: 24px; /* You can adjust the font size as needed */
        }

        ol li {
            font-size: 18px; /* You can adjust the font size as needed */
            line-height: 1.5; /* Optional: Adjust line height for better readability */
        }

        /* Additional CSS for circular image */
        .pet-image {
            width: 100px; /* Adjust the width of the circular image */
            height: 100px; /* Adjust the height of the circular image */
            border-radius: 50%; /* Create a circular shape */
            overflow: hidden; /* Ensure the image stays within the circular shape */
            margin: 20px auto; /* Center the circular image */
        }

        .pet-image img {
            width: 100%; /* Make the image fill the circular container */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Remove extra spacing beneath the image */
        }

.navbar-brand {
    font-size: 28px; /* Adjust the font size as needed */
}

.navbar-nav .nav-link {
    font-size: 16px; /* Adjust the font size as needed */
    border-radius: 10px; /* Adjust the border-radius for rounded corners */
    transition: background-color 0.3s, color 0.3s;
}

.navbar-nav .nav-link:hover {
    background-color: #E1DBDA;
    color: black;
}

  </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm sticky-top" style="background-color:#ECE7E6">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" style="font-family: Trirong, serif; font-size: 26px;">
                <img src="{{ asset('logo-circle.png') }}" alt="Petode Logo" style="height: 45px;">
                PETODE
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    <ul class="navbar-nav me-auto" style="font-family: Trirong, sans-serif;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Adopt a Pet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('petcares.index') }}">Pet Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adoption_history') }}">History</a>
                        </li>
                    </ul>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-family: Sofia, sans-serif;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->fname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
