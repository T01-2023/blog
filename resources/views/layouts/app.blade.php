<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow-sm">
                    <div class="max-w-7xl mx-auto py-4 px-4">
                        {{ $header }}
                    </div>
                </header>
            @endisset



            <div class="border border-amber-400  h-20 max-w-7xl mx-auto p-4">
                @if (session('status'))
                <div class="bg-green-100" x-data="{ show: true }"
                     x-show="show"
                     x-transition
                     x-init="setTimeout(() => show = false, 5000)"
                     class="text-sm text-gray-600"
                >{{ session('status')}}
                </div>
                @endif

                    @dump(session('status'))


            </div>

            <!-- Page Content -->
            <main>
                <div>
                    <div class="max-w-7xl mx-auto p-4 border-0 border-green-800 text-sm text-gray-400">
                        {{ $slot }}
                    </div>
                </div>

            </main>

            <x-dev.mediaqueries />
        </div>
    </body>
</html>
