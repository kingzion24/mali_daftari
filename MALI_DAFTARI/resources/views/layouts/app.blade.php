<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Bar -->
        @include('layouts.navigation') <!-- Include the navigation bar here -->

        <div class="flex flex-grow">
            <!-- Sidebar -->
            <div class="w-1/6 bg-gray-900 dark:bg-gray-900 p-4">
                @include('layouts.sidebar')
            </div>

            <!-- Main Content Area -->
            <div class="w-full bg-white dark:bg-gray-500 p-6">
                @yield('content') <!-- Content from individual views will be inserted here -->
            </div>
        </div>
    </div>
</body>
</html>
