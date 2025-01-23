<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Wisata Wissemar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-900 transition-colors duration-300" x-data="darkMode" x-init="init()">
    <!-- Include Navbar -->
    @include('components.Navbar')

    <!-- Sign Up Section -->
    <section class="pt-24 pb-16 px-4 flex items-center justify-center min-h-screen">
        <form>
            <div
                class="bg-white dark:bg-gray-700 text-gray-900 dark:text-white p-12 rounded-lg shadow-lg max-w-lg w-full">
                <h2 class="text-4xl font-semibold mb-4 text-center">Create an Account</h2>
                <p class="mb-8 text-gray-500 dark:text-gray-300 text-center">Join us to explore Semarang!</p>

                <form method="POST" action="{{ route('signup') }}">
                    @csrf

                    <div class="flex gap-4 mb-4">
                        <div class="w-1/2">
                            <label for="first_name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">First Name</label>
                            <input type="text" id="first_name" name="first_name" pattern="[A-Za-z]+"
                                title="Only letters are allowed"
                                class="mt-1 block w-full px-4 py-2 bg-gray-100 dark:bg-gray-600 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400"
                                required>
                        </div>
                        <div class="w-1/2">
                            <label for="last_name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Last Name</label>
                            <input type="text" id="last_name" name="last_name" pattern="[A-Za-z]+"
                                title="Only letters are allowed"
                                class="mt-1 block w-full px-4 py-2 bg-gray-100 dark:bg-gray-600 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400"
                                required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 dark:bg-gray-600 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400"
                            required>
                    </div>

                    <div class="mb-4 relative">
                        <label for="password"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" id="password" name="password"
                            pattern="^(?=.[A-Za-z])(?=.\d)[A-Za-z\d]{8,}$"
                            title="Password must be at least 8 characters long, containing both letters and numbers."
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 dark:bg-gray-600 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400"
                            required>
                        <!-- Icon untuk menampilkan/memperlihatkan password -->
                        <i id="togglePassword"
                            class="fas fa-eye absolute top-11 right-4 transform -translate-y-1/2 cursor-pointer text-gray-500 dark:text-gray-400"></i>
                    </div>

                    <div class="mb-4 relative">
                        <label for="password_confirmation"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 dark:bg-gray-600 border border-gray-300 dark:border-gray-500 rounded-md text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400"
                            required>
                        <!-- Icon untuk menampilkan/memperlihatkan confirm password -->
                        <i id="toggleConfirmPassword"
                            class="fas fa-eye absolute top-11 right-4 transform -translate-y-1/2 cursor-pointer text-gray-500 dark:text-gray-400"></i>
                    </div>

                    <div class="mb-6">
                        <input type="checkbox" id="terms" name="terms" class="text-blue-500" required>
                        <label for="terms" class="text-sm text-gray-300">I agree to the <a href="#"
                                class="text-blue-400">Terms</a> and <a href="#" class="text-blue-400">Privacy
                                Policy</a></label>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Sign
                        Up</button>
                </form>

                {{-- <p class="mt-6 text-center text-sm text-gray-400">Already have an account? <a href="{{ route('login') }}"
                class="text-blue-400">Login</a></p> --}}
            </div>
        </form>
    </section>

    <!-- Footer -->
    <footer
        class="py-8 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 transition-colors duration-300">
        <div class="container mx-auto text-center text-gray-600 dark:text-gray-400">
            <p>&copy; 2024 Wisata Wissemar. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // JavaScript untuk toggle password visibility
        const togglePassword = document.getElementById("togglePassword");
        const password = document.getElementById("password");
        const toggleConfirmPassword = document.getElementById("toggleConfirmPassword");
        const confirmPassword = document.getElementById("password_confirmation");

        // Toggle password visibility
        togglePassword.addEventListener("click", function () {
            const type = password.type === "password" ? "text" : "password";
            password.type = type;
            this.classList.toggle("fa-eye-slash");
        });

        // Toggle confirm password visibility
        toggleConfirmPassword.addEventListener("click", function () {
            const type = confirmPassword.type === "password" ? "text" : "password";
            confirmPassword.type = type;
            this.classList.toggle("fa-eye-slash");
        });

    </script>
</body>

</html>