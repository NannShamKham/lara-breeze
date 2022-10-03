<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @auth
                    <div class="w-[90%] py-12 mx-auto">
                        <div class="grid grid-cols-9 gap-2">
                            <div class="col-span-2">
{{--                                    side Bar--}}
                                @include('layouts.sideBar')


                            </div>
                            <div class="col-span-7 ">
                                {{ $slot }}
                            </div>
                        </div>

                    </div>
                @endauth
                @guest
                        {{ $slot }}
                    @endguest

            </main>
        </div>
    </body>
</html>
