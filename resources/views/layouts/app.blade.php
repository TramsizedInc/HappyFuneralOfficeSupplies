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

        <div  class="min-h-screen bg-gray-100 dark:bg-gradient-to-r from-gray-800 to-gray-800">

            <!-- Page Content -->
            <main >
                <div style="background-image: url('{{asset('storage/bg.png')}}')" class=" min-h-screen min-w-full bg-bamboo"> <div style="opacity: 1.0" class="p-4 sm:ml-64" >
                        {{ $slot }}
                    </div></div>

                @include('layouts.sidebar')

                <!-- Jumbotron -->
            </main>
            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <!--Footer container-->

        </div>

    </body>
</html>
