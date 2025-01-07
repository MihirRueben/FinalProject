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

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        body {
            background-color: #fff;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        /* Background image styling */
        .background-image {
            background-image: url('https://img.freepik.com/free-vector/vintage-science-education-background-theme_23-2148477890.jpg?semt=ais_hybrid');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Ensures the image stays in place while scrolling */
            position: fixed; /* Fix it to the viewport */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1; /* Ensure it's behind everything */
        }

        /* Header style */
        header {
            position: relative;
            z-index: 10; /* Ensure it stays on top of background */
        }

        .header-content {
            z-index: 10;
        }

        /* Content styling */
        .main-content {
            position: relative;
            z-index: 1;
        }

        footer {
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-white font-sans antialiased">

    <!-- Background Image -->
    <div class="background-image"></div>

    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-red-600 text-black">
            <div class="header-content">
                @include('layouts.navigation')
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow main-content">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- Page Header -->
                <div class="text-yellow-500 text-xl font-semibold">
                    {{ $header ?? '' }}
                </div>

                <!-- Content -->
                <section class="mt-6 bg-white p-6 rounded-lg shadow border-t-4 border-yellow-500">
                    {{ $slot }}
                </section>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-yellow-500 text-center py-4">
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
    </footer>

</body>
</html>