<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

        <!-- css -->
        <link href={{ url ('/' ). "/build/assets/animate.min.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/backToTop.css"}} rel="stylesheet" />
        <!-- <link href={{ url ('/' ). "/build/assets/bootstrap.min.css"}} rel="stylesheet" /> -->
        <link href={{ url ('/' ). "/build/assets/default.css" }}rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/flaticon.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/fontAwesome5Pro.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/huicalendar.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/magnific-popup.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/meanmenu.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/nice-select.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/owl.carousel.min.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/preloader.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/style.css"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/style.css.map"}} rel="stylesheet" />
        <link href={{ url ('/' ). "/build/assets/swiper-bundle.css"}} rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                
                {{ $slot }}
                
            </main>
    </body>
</html>



