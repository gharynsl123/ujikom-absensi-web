<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('template/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
</head>

<body style="background-color:#F4FAFF;">
    <div id="app">
        <nav class="navbar navbar-main navbar-expand-lg m-2 px-4 rounded shadow bg-body-tertiary">
            <div class="container-fluid collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="nav">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-black text-decoration-none"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-black text-decoration-none"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <div class="nav-link border text-black border-dark rounded-pill ">
                            <i class="fa fa-user mx-2"></i>
                            <a id="navbarDropdown" href="#" class="dropdown-toggle text-black text-decoration-none"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item ms-4">
                        <i type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                            aria-controls="offcanvasScrolling" class="fa fa-bars"></i>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main>
            @yield('auth')
        </main>
    </div>
</body>

</html>