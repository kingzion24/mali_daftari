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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1zNz5g9KzG1R1jq78dEOeFzF/0c5RL30G4NlZZjErqzv+Zm6jAYJoS9+2vTAv5np+esvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Dark Mode Toggle Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const theme = localStorage.getItem('theme') || 'light';
        const themeIcon = document.getElementById('themeIcon');
        
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        } else {
            document.documentElement.classList.remove('dark');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        }
    });

    function toggleTheme() {
        const htmlClasses = document.documentElement.classList;
        const themeIcon = document.getElementById('themeIcon');
        
        if (htmlClasses.contains('dark')) {
            htmlClasses.remove('dark');
            localStorage.setItem('theme', 'light');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            htmlClasses.add('dark');
            localStorage.setItem('theme', 'dark');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }
    }
</script>

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
