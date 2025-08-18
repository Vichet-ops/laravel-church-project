<nav class="{{ request()->is('/') ? 'bg-transparent absolute top-2 md:top-4 left-0 w-full' : 'bg-white shadow-lg relative w-full' }} z-10 pt-4 pb-4 transition duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between {{ request()->is('/') ? 'h-24 md:h-28' : 'h-20' }}">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="hover:opacity-80 transition duration-300">
                        <img src="{{ asset('images/red-cross-transparent-clean.png') }}" alt="Grace Brethren Church Logo" class="{{ request()->is('/') ? 'h-20 md:h-24 lg:h-28' : 'h-12' }} w-auto">
                    </a>
                </div>
            </div> 

            <!-- Desktop Navigation --> 
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'text-white font-bold' : 'text-gray-700 hover:text-blue-600' }} px-4 py-3 rounded-md text-base font-medium transition duration-300">
                    Home
                </a>
                <a href="{{ route('about') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('about') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} px-4 py-3 rounded-md text-base font-medium transition duration-300">
                    About
                </a>
                <a href="{{ route('services') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('services') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} px-4 py-3 rounded-md text-base font-medium transition duration-300">
                    Services
                </a>
                <a href="{{ route('events') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('events') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} px-4 py-3 rounded-md text-base font-medium transition duration-300">
                    Events
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('contact') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} px-4 py-3 rounded-md text-base font-medium transition duration-300">
                    Contact
                </a>
                <a href="{{ route('give') }}" class="bg-blue-600 text-white px-6 py-3 rounded-md text-base font-medium hover:bg-blue-700 transition duration-300">
                    Give
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : 'text-gray-700 hover:text-blue-600' }} focus:outline-none" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 {{ request()->is('/') ? 'bg-black bg-opacity-75' : 'bg-white' }} rounded-lg">
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'text-white font-bold' : 'text-gray-700 hover:text-blue-600' }} block px-4 py-3 rounded-md text-lg font-medium transition duration-300">
                    Home
                </a>
                <a href="{{ route('about') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('about') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} block px-4 py-3 rounded-md text-lg font-medium transition duration-300">
                    About
                </a>
                <a href="{{ route('services') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('services') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} block px-4 py-3 rounded-md text-lg font-medium transition duration-300">
                    Services
                </a>
                <a href="{{ route('events') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('events') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} block px-4 py-3 rounded-md text-lg font-medium transition duration-300">
                    Events
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->is('/') ? 'text-white hover:text-blue-200' : (request()->routeIs('contact') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600') }} block px-4 py-3 rounded-md text-lg font-medium transition duration-300">
                    Contact
                </a>
                <a href="{{ route('give') }}" class="bg-blue-600 text-white block px-4 py-3 rounded-md text-lg font-medium hover:bg-blue-700 transition duration-300">
                    Give
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Toggle menu when button is clicked
    mobileMenuButton.addEventListener('click', function(e) {
        e.stopPropagation(); // Prevent event from bubbling up
        mobileMenu.classList.toggle('hidden');
    });
    
    // Close menu when clicking anywhere else
    document.addEventListener('click', function(e) {
        // If menu is open and click is not on menu or button
        if (!mobileMenu.classList.contains('hidden') && 
            !mobileMenu.contains(e.target) && 
            !mobileMenuButton.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
    
    // Close menu when pressing Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
