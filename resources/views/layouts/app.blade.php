<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Vite untuk compile assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white dark:bg-gray-900" x-data="darkMode" x-init="init()">
    <!-- Include navbar component -->
    @include('components.navbar')
    
    <!-- Content section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer section -->
    <footer class="bg-white dark:bg-gray-900">
        <!-- Footer content here -->
    </footer>
</body>
</html>