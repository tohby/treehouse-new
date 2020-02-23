<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <title>Khanh | Treehouse</title>

    <!-- Fonts -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tree4564.css')}}">
    <link rel="icon" href="{{asset('images/logo.png')}}">
</head>

<body class="{{ request()->is('messages') || request()->is('messages/*') ? 'no-overflow' : '' }}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a class="nav-link btn btn-primary text-white btn-lg"
                                href="{{ route('register') }}">{{ __('Register') }}</a> @endif
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <div class="d-md-none">
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                                <a class="nav-link" href="/profile">Profile</a>
                                <a class="nav-link" href="/news">Portfolio</a>
                                <a class="nav-link" href="/events">Events</a>
                                <a class="nav-link" href="/blog">Blog</a>
                                <a class="nav-link" href="/#">Mailing list</a>
                                <a class="nav-link" href="/users/">Users</a>
                            </div>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} <span class="caret"></span>
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
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sidenav d-none d-md-block">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1 class="h3 strong">Khanh</h1>
            </a>
            <div id="menu" class="px-3">
                <a href="/dashboard" class="{{ request()->is('dashboard') || request()->is('dashboard/*') ? 'active' : '' }}"> Dashboard</a>
                <a href="/profile" class="{{ request()->is('profile/*') || request()->is('profile/*/edit') || request()->is('product/*') ? 'active' : '' }}"></i>Profile</a>
                <a href="/messages" class="{{ request()->is('messages') || request()->is('messages/*') ? 'active' : '' }}"></i>Portfolio</a>
                <a href="/events" class="{{ request()->is('events') || request()->is('events/*') ? 'active' : '' }}"></i>Events</a>
                <a href="/blog" class="{{ request()->is('blog') || request()->is('blog/*') ? 'active' : '' }}"></i>Blog</a>
                <a href="/consultation" class="{{ request()->is('consultation') ? 'active' : '' }}"></i>Mailing list</a>
                @if (Auth::user()->role->id == 1)
                    <a href="/users" class="{{ request()->is('users') ? 'active' : '' }}">Users</a>
                @endif
            </div>
        </div>
        <main class="py-2 px-3">
            <div class="container my-1">
                @include('layouts/messages')
            </div>
            @yield('content')
        </main>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/bs-custom-file-input.js') }}"></script>
   
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            bsCustomFileInput.init()
            var btn = document.getElementById('btnResetForm')
            var form = document.querySelector('form')
            btn.addEventListener('click', function () {
              form.reset()
            })
          });
    </script>
</body>

</html>