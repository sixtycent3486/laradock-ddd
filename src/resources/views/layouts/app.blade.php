<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ Vite::asset('resources/images/favicon.png') }}" rel="shortcut icon">

        @vite(['resources/scss/app.scss'])
        @vite(['resources/css/app.css'])
        @livewireStyles
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show font-sans antialiased">

    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none ml-4 mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <div class="navbar-brand-full"><img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo"></div>
            <div class="navbar-brand-minimized"><img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo"></div>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="px-3 welcome_name d-none d-lg-block">
            <b>Willkommen {{ Auth::user()->name ?? Auth::user()->email }}</b>
        </div>


        <ul class="nav navbar-nav top_navigation ml-auto d-sm-flex">
            <li class="nav-item d-sm-flex mx-2">
                <a href="#" class="c-header-nav-link" title="{{ trans('global.logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon cil-account-logout"></i>
                </a>
            </li>
        </ul>


    </header>

    <div class="app-body">
        @include('layouts.navigation')
        <main class="main" id="main">


            <div class="container-fluid">
                @if(session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>


        </main>

        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div>


        @vite(['resources/js/app.js'])
        @livewireScripts

    </body>
</html>
