<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>{{ config('app.name', 'Cafeteria') }}</title>
=======
    <title>Cafeteria</title>
>>>>>>> 9588aa0576a12669146d76fe2177423079ed6232

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
   *
   {
    color:#FFF;
<<<<<<< HEAD
    background-color: #665388
=======
    background-color: #605D86
>>>>>>> 9588aa0576a12669146d76fe2177423079ed6232
   }
</style>
   
</head>
<body>
    <div id="app">
        <nav  class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a style="width: 20%;"  class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
<<<<<<< HEAD
                    <img width="20%" height="15%" src="{{asset('logo.png')}}" alt="logo">
=======
                    <img width="40vh" height="15%" src="{{asset('logo.png')}}" alt="logo">
>>>>>>> 9588aa0576a12669146d76fe2177423079ed6232
                   
                     <span  style="font-weight: bolder;font-size: 1.9rem">  Cafeteria</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- <li style="float: left"><a href=""> home</a> </li> --}}

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                       
                       
                     

                    </ul>
                    <ul class="navbar-nav me-auto"><li><a style="font-size: 1.5rem" href="/home"> Home</a> </li> </ul>
                        <ul class="navbar-nav me-auto"><li><a style="font-size: 1.5rem" href="/products"> Products</a> </li> </ul>
                    
                    

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
                                <a style="color:#FFF" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
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

<<<<<<< HEAD
        <main class="py-4 container">
            @yield('content')
        </main>
=======
        <main class="container">
            @yield('content')
        </main>
        <div>
            @yield('welcome')
        </div>
>>>>>>> 9588aa0576a12669146d76fe2177423079ed6232
    </div>
</body>
</html>
