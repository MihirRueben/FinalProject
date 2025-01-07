<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Research Grant Management System') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Global styling */
            body {
                background-color: #f5f5f5; /* Light background */
                color: #000000; /* Black text */
                font-family: 'Figtree', sans-serif;
            }

            .text-gray-900 {
                color: #000000; /* Ensuring text is black */
            }

            .bg-gray-100 {
                background-color: #ffffff; /* White background */
            }

            .bg-gray-800 {
                background-color: #ffffff; /* White background for sections */
            }

            /* Header and logo */
            .w-20 {
                width: 80px;
            }

            .h-20 {
                height: 80px;
            }

            .fill-current {
                fill: red; /* Logo icon color in red */
            }

            .text-gray-500 {
                color: #000000; /* Ensure all text is black */
            }

            /* Main container styling */
            .min-h-screen {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background: linear-gradient(45deg, #ffffff, #f5f5f5); /* Light gradient background */
            }

            .sm:max-w-md {
                max-width: 420px;
            }

            /* Card container */
            .w-full {
                width: 100%;
            }

            .bg-white {
                background-color: #ffffff; /* White container */
                border-radius: 8px;
                padding: 2rem;
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            }

            .dark\:bg-gray-800 {
                background-color: #ffffff;
            }

            .shadow-md {
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            }

            .overflow-hidden {
                overflow: hidden;
            }

            .sm\:rounded-lg {
                border-radius: 8px;
            }

            /* Button */
            .btn-custom {
                background-color: #ff4747; /* Red button */
                padding: 0.75rem 1.5rem;
                border-radius: 5px;
                font-weight: bold;
                text-transform: uppercase;
                transition: background-color 0.3s ease;
                color: white;
                border: none;
            }

            .btn-custom:hover {
                background-color: #e04343; /* Darker red on hover */
            }

            /* Form input styling */
            input[type="email"], input[type="password"], input[type="checkbox"] {
                border: 1px solid #cccccc;
                border-radius: 4px;
                padding: 0.75rem;
                margin-top: 0.5rem;
                width: 100%;
            }

            input[type="email"]:focus, input[type="password"]:focus {
                border-color: #ff4747;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
            <a href="/">
    <img src="https://logopond.com/logos/0b50fc427a8b879e6796b66300475f9d.png" alt="Logo" class="w-40 h-40">
</a>


            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>


https://logopond.com/logos/0b50fc427a8b879e6796b66300475f9d.pnghttps://logopond.com/logos/0b50fc427a8b879e6796b66300475f9d.png