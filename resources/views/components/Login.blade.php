<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wisata Wissemar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-900 transition-colors duration-300" x-data="darkMode" x-init="init()">
    <!-- Include Navbar -->
    @include('components.Navbar')

    <!-- Login Section -->
    <section class="py-16 px-4 flex items-center justify-center h-screen">
        <div class="bg-white dark:bg-gray-700 rounded-lg p-8 shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">Login to Wisata Wissemar</h2>
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded-lg bg-gray-50 dark:bg-gray-600 
                                      text-gray-900 dark:text-white 
                                      border border-gray-300 dark:border-gray-500 
                                      focus:outline-none focus:ring-2 focus:ring-blue-500 
                                      dark:focus:ring-blue-400 transition-colors">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" class="w-full px-4 py-2 rounded-lg bg-gray-50 dark:bg-gray-600 
                                      text-gray-900 dark:text-white 
                                      border border-gray-300 dark:border-gray-500 
                                      focus:outline-none focus:ring-2 focus:ring-blue-500 
                                      dark:focus:ring-blue-400 transition-colors">
                </div>
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="mr-2 text-blue-500 focus:ring-blue-500 dark:focus:ring-blue-400">
                        <label for="remember" class="text-gray-700 dark:text-gray-300">Remember me</label>
                    </div>
                    <a href="#" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">Forgot password?</a>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition-colors duration-300">
                    Sign In
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 transition-colors duration-300">
        <div class="container mx-auto text-center text-gray-600 dark:text-gray-400">
            <p>&copy; 2024 Wisata Wissemar. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>