<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Insta_Like_App</title>
    {{-- App logo in title bar --}}
    <link rel="icon" href="{!! asset('/SVG/Insta_logo.ico') !!}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
            style="position: fixed; top: 0px; width: 100%; z-index: 100;">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/svg/Insta_logo.svg" style="height: 25px; border-right: 1px solid black;"
                            class="pr-3"></div>
                    <div class="pl-3 pt-1 ">Insta_Like_App</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">

                    </ul>
                    <div style="margin-left: 23%;">
                        <svg height="17" width="17" viewBox="0 0 24 24" style="position: relative; left: 95px;
                        fill: grey;">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                        <input type="search" placeholder="Search" class="text-center"
                            style="padding-left: 40px; border:1px solid black;">
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <div class="d-flex">
                                {{-- Home --}}
                                <a href="/">
                                    <img src="/SVG/home.svg" height="30" class="pr-3 pt-2">
                                </a>
                                {{-- Chat --}}
                                <a href="/chat">
                                    <img src="/SVG/chat.svg" height="30" class="pr-3 pt-2">
                                </a>

                                <a href="">
                                    <img src="/SVG/notifications.svg" height="30" class="pr-1 pt-2">
                                </a>

                                <a href="">
                                </a>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/SVG/User.svg" height="25" class="pb-1">
                                </a>

                                <div class=" dropdown-menu" aria-labelledby="navbarDropdown">
                                    {{-- User Profile --}}
                                    <div class="d-flex">
                                        <a class="dropdown-item"
                                            href="/profile/{{Auth::user()->id}}">{{Auth::user()->username}}</a>
                                    </div>

                                    {{-- Logout --}}
                                    <div class="d-flex">
                                        {{-- <a href="Auth::user->profile->user->id">Profile</a> --}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <div>Logout</div>
                                        </a>
                                    </div>
                                </div>
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
    </div>
    <main>
        @yield('content')
    </main>
</body>

</html>
