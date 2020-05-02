<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Khanh Arts</title>

    <!-- Fonts -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tree4564.css')}}">
    <link rel="icon" href="{{asset('images/icon.png')}}">
</head>

<body class="{{ request()->is('messages') || request()->is('messages/*') ? 'no-overflow' : '' }}">
    <div id="app" class="mb-4">
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
                                <a class="nav-link" href="/portfolio">Portfolio</a>
                                <a class="nav-link" href="/our-events">Events</a>
                                <a class="nav-link" href="/orders">Orders</a>
                                <a class="nav-link" href="/messages">Messages</a>
                                <a class="nav-link" href="/users">Users</a>
                            </div>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} <i class="fas fa-caret-down"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="/" class="dropdown-item">Go to Site</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="/change-password">
                                    Change Password
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
            <a class="navbar-brand px-4" href="{{ url('/dashboard') }}">
                <h1 class="h3 logo">Khanh</h1>
            </a>
            <div id="menu" class="px-3 my-4">
                <a href="/dashboard"
                    class="{{ request()->is('dashboard') || request()->is('dashboard/*') ? 'active' : '' }}">
                    Dashboard</a>
                <a href="/portfolio"
                    class="{{ request()->is('portfolio') || request()->is('portfolio/*') ? 'active' : '' }}"></i>Portfolio</a>
                <a href="/our-events"
                    class="{{ request()->is('our-events') || request()->is('our-events/*') ? 'active' : '' }}"></i>Events</a>
                <a href="/orders"
                    class="{{ request()->is('orders') || request()->is('orders/*') ? 'active' : '' }}"></i>Orders</a>
                <a href="/messages"
                    class="{{ request()->is('message/*') || request()->is('messages') || request()->is('messages/*') ? 'active' : '' }}"></i>Messages</a>
                @can ('manage-users')
                <a href="/users"
                    class="{{ request()->is('users') || request()->is('users/*') ? 'active' : '' }}">Users</a>
                @endcan
            </div>
        </div>
        <main class="py-2 px-3">
            <div class="container my-1">
                @include('layouts/messages')
            </div>
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
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
    @yield('scripts')
</body>

</html>