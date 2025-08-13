<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-blue-600">Grace Brethren Church</h1>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="@if(request()->is('/')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                    Home
                </a>
                <a href="/about" class="@if(request()->is('about')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                    About
                </a>
                <a href="/services" class="@if(request()->is('services')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                    Services
                </a>
                <a href="/events" class="@if(request()->is('events')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                    Events
                </a>
                <a href="/contact" class="@if(request()->is('contact')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                    Contact
                </a>
                <a href="/give" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition duration-300">
                    Give
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="@if(request()->is('/')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    Home
                </a>
                <a href="/about" class="@if(request()->is('about')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    About
                </a>
                <a href="/services" class="@if(request()->is('services')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    Services
                </a>
                <a href="/events" class="@if(request()->is('events')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    Events
                </a>
                <a href="/contact" class="@if(request()->is('contact')) text-blue-600 font-bold @else text-gray-700 hover:text-blue-600 @endif block px-3 py-2 rounded-md text-base font-medium transition duration-300">
                    Contact
                </a>
                <a href="/give" class="bg-blue-600 text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-700 transition duration-300">
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
