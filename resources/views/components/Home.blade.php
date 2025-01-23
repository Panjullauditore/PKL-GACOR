<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Wissemar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-white dark:bg-gray-900 transition-colors duration-300" x-data="darkMode" x-init="init()">
    <!-- Include Navbar -->
    @include('components.Navbar')

    <!-- Hero Section -->
    <header class="relative h-screen">
        <div class="absolute inset-0">
            <img src="{{ asset('images/wissemar.jpg') }}" alt="Wissemar" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white">
            <h1 class="text-5xl font-bold mb-4 text-white dark:text-white">WISATA WISSEMAR</h1>
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full transition duration-300">
                Explore Now
            </button>
        </div>
    </header>

    <!-- About Us Section -->
    <section class="py-16 px-4 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">ABOUT US</h2>
            <p class="text-gray-600 dark:text-gray-300 text-center max-w-3xl mx-auto">
                Welcome to Wisata Wissemar, your gateway to extraordinary travel experiences. We are dedicated to
                showcasing the best destinations and creating unforgettable memories for our visitors.
            </p>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 px-4 bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">CATEGORIES</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($categories as $category)
                <div
                    class="bg-white dark:bg-gray-700 rounded-lg p-6 transform hover:scale-105 transition duration-300 shadow-lg">
                    <div
                        class="w-16 h-16 rounded-full bg-{{ $category['color'] }}-500 flex items-center justify-center mb-4">
                        <i class="{{ $category['icon'] }} text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $category['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ $category['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Popular Section -->
    <section class="py-16 px-4 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">POPULAR</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($popularPlaces as $place)
                <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset($place['image']) }}" alt="{{ $place['title'] }}"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $place['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $place['description'] }}</p>
                        <button
                            class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">Read
                            More</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 px-4 bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
        <div class="container mx-auto max-w-xl">
            <div class="bg-white dark:bg-gray-700 rounded-lg p-8 shadow-lg">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 text-center">SIGNUP FOR NEWSLETTER</h2>
                <form class="flex gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 rounded-lg bg-gray-50 dark:bg-gray-600 
                                  text-gray-900 dark:text-white 
                                  border border-gray-300 dark:border-gray-500 
                                  focus:outline-none focus:ring-2 focus:ring-blue-500 
                                  dark:focus:ring-blue-400 transition-colors">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition-colors duration-300">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer
        class="py-8 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 transition-colors duration-300">
        <div class="container mx-auto text-center text-gray-600 dark:text-gray-400">
            <p>&copy; 2024 Wisata Wissemar. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
