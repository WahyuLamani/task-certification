<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    /* Custom CSS for Ministry of Transportation logo */
    .ministry-logo {
      width: 27px; /* Sesuaikan ukuran logo */
      height: auto;
      margin-right: 10px; /* Spasi antara logo dan teks navbar */
    }
    /* Custom CSS for small text */
    .small-text {
      font-size: 0.8rem;
    }
        .footer-logo {
          height: 35px; /* Sesuaikan ukuran logo */
          width: auto;
        }
        .custom-line-height {
            line-height: 1.2; /* Atur jarak vertikal antara baris */
        }
        .text-10px {
            font-size: 10px;
        }
        .text-12px {
            font-size: 12px;
        }
    
  </style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div>
                    <a class="navbar-brand d-flex" href="{{ url('/') }}">
                        <div>
                            <img src="{{asset('assets/images/kementrian-perhubungan.png')}}" alt="Ministry of Transportation Logo" class="ministry-logo">
                        </div>
                        <div>
                            <div class="custom-line-height text-12px"><b>KEMENTRIAN PERHUBUNGAN</b></div>
                            <div class="custom-line-height text-10px">BPTD KELAS II JAMBI</div>
                        </div>
                    </a>
                    
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <x-navbar />

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <main class="">
            @yield('content')
        </main>
    </div>
        <footer class="bg-white p-2">
            <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div class="text-secondary">&copy; 2024</div>
                </div>
                <div class="col-md-8 d-flex justify-content-end">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center">
                            <img src="{{asset('assets/images/kementrian-perhubungan.png')}}" alt="Logo" class="mt-1 footer-logo">
                        </div>
                        <div class="col-10">
                            <div class="custom-line-height text-12px"><b>KEMENTRIAN PERHUBUNGAN</b></div>
                            <div class="text-secondary custom-line-height text-10px">DIREKTORAT JENDRAL PERHUBUNGAN DARAT</div>
                            <div class="custom-line-height text-12px"><b>BPTD KELAS II JAMBI</b></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>

</body>

</html>