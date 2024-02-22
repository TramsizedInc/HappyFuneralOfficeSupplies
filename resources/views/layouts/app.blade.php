<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div style="background-image: url('{{asset('storage/bg.png')}}')" class="bg-bamboo min-h-screen bg-gray-100 dark:bg-gradient-to-r from-gray-800 to-gray-800">


            <!-- Page Content -->
            <main >
                     @include('layouts.sidebar')
                    <div class="p-4 sm:ml-64" >
                        {{ $slot }}
                    </div>
                <!-- Jumbotron -->
            </main>
            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <!--Footer container-->

        </div>

    </body>
</html>
