<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/dropdown.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="sticky top-0 bg-white shadow w-full">
                <div class="flex items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex-initial w-32 fixed  left-0 px-6 py-3">
                        <a href="{{ route('main_page') }}">Pylon</a>
                    </div>
                    <div class="flex-none fixed  right-0 px-6  py-3 sm:block">
                        @auth
                            <button id="dropdown-btn">
                                <div class="text-sm text-gray-700 dark:text-gray-500 underline hover:font-bold">{{ Auth::user()->name }}</div>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endauth
                    </div>
                </div>
                {{ $header }}
            </header>
            <div id="dropdown-menu" class="invisible bg-white fixed right-0 w-32 h-32 p-8 border border-black">
                <a class="my-auto text-gray-700 dark:text-gray-500 underline hover:font-bold" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                <form class="my-auto" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="text-gray-700 dark:text-gray-500 underline hover:font-bold" href="{{route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                </form>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
