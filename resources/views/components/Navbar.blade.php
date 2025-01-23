<nav x-data="{ open: false, scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="{
        'bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg shadow': scrolled,
        'bg-transparent': !scrolled
    }"
    class="fixed w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo dan Dark Mode Toggle -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-xl font-bold text-gray-800 dark:text-white">LOGO</span>
                </div>
                <!-- Dark Mode Toggle -->
                <button @click="$store.darkMode.toggle()" class="ml-4 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <svg x-show="!$store.darkMode.on" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                    <svg x-show="$store.darkMode.on" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/home" class="text-gray-800 dark:text-white hover:text-blue-500 dark:hover:text-blue-400 transition-colors">HOME</a>
                <a href="/about" class="text-gray-800 dark:text-white hover:text-blue-500 dark:hover:text-blue-400 transition-colors">ABOUT</a>
                <a href="/services" class="text-gray-800 dark:text-white hover:text-blue-500 dark:hover:text-blue-400 transition-colors">SERVICES</a>
                <a href="/blog" class="text-gray-800 dark:text-white hover:text-blue-500 dark:hover:text-blue-400 transition-colors">BLOG</a>
                <a href="/contact" class="text-gray-800 dark:text-white hover:text-blue-500 dark:hover:text-blue-400 transition-colors">CONTACT</a>
            </div>

            <!-- Profile Picture and Mobile Menu Button -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-8 h-8 rounded-full">
                <!-- Mobile menu button -->
                <button @click="open = !open" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800">
                    <svg class="h-6 w-6" x-show="!open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="open" 
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-1"
            class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/home" class="block px-3 py-2 rounded-md text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800">HOME</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800">ABOUT</a>
                <a href="/services" class="block px-3 py-2 rounded-md text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800">SERVICES</a>
                <a href="/blog" class="block px-3 py-2 rounded-md text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800">BLOG</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800">CONTACT</a>
            </div>
        </div>
    </div>
</nav>