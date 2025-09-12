<nav class="fixed top-0 left-0 w-full z-50 bg-gradient-to-b from-[#0b1f3a] to-[#1b2f58] shadow-md pt-4 pb-4" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 md:h-24 lg:h-28">
            
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="hover:opacity-80 transition duration-300 flex items-center">
                    <img src="{{ asset('images/cross-logo.png') }}"
                         alt="Muang Thai Korat Church Logo"
                         class="h-12 md:h-20 lg:h-24 w-auto">
                    <span class="ml-3 text-white font-semibold text-base md:text-lg">Muang Thai Korat Church</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-4 ml-16 lg:ml-20">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 px-4 py-3 text-base font-medium transition duration-300 relative group">
                    <span class="relative inline-block">
                        Home
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('/') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 px-4 py-3 text-base font-medium transition duration-300 relative group">
                    <span class="relative inline-block">
                        About
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('about') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 px-4 py-3 text-base font-medium transition duration-300 relative group">
                    <span class="relative inline-block">
                        Services
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('services') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/events') }}" class="{{ request()->is('events') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 px-4 py-3 text-base font-medium transition duration-300 relative group">
                    <span class="relative inline-block">
                        Events
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('events') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/gallery') }}" class="{{ request()->is('gallery') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 px-4 py-3 text-base font-medium transition duration-300 relative group">
                    <span class="relative inline-block">
                        Gallery
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('gallery') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 px-4 py-3 text-base font-medium transition duration-300 relative group">
                    <span class="relative inline-block">
                        Contact
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('contact') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/give') }}" class="bg-blue-600 text-white px-6 py-3 rounded-md text-base font-medium hover:bg-blue-700 transition duration-300 shadow-md">
                    Give
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-blue-200 focus:outline-none focus:text-blue-200 cursor-pointer" aria-label="Toggle mobile menu">
                    <svg class="h-6 w-6 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path class="transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-[#0b1f3a] rounded-lg mt-4 shadow-lg border border-[#1b2f58]">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 block px-3 py-2 text-base font-medium rounded-md transition duration-300 group cursor-pointer">
                    <span class="relative inline-block">
                        Home
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('/') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 block px-3 py-2 text-base font-medium rounded-md transition duration-300 group cursor-pointer">
                    <span class="relative inline-block">
                        About
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('about') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 block px-3 py-2 text-base font-medium rounded-md transition duration-300 group cursor-pointer">
                    <span class="relative inline-block">
                        Services
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('services') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/events') }}" class="{{ request()->is('events') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 block px-3 py-2 text-base font-medium rounded-md transition duration-300 group cursor-pointer">
                    <span class="relative inline-block">
                        Events
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('events') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/gallery') }}" class="{{ request()->is('gallery') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 block px-3 py-2 text-base font-medium rounded-md transition duration-300 group cursor-pointer">
                    <span class="relative inline-block">
                        Gallery
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('gallery') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-blue-200' : 'text-white' }} hover:text-blue-200 block px-3 py-2 text-base font-medium rounded-md transition duration-300 group cursor-pointer">
                    <span class="relative inline-block">
                        Contact
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-white transition-all duration-300 ease-out {{ request()->is('contact') ? 'w-full' : '' }} group-hover:w-full"></span>
                    </span>
                </a>
                <a href="{{ url('/give') }}" class="bg-blue-600 text-white block px-3 py-2 text-base font-medium rounded-md hover:bg-blue-700 transition duration-300 shadow-md cursor-pointer">
                    Give
                </a>
            </div>
        </div>
        </div>
    </div>
</nav>

<script>
    function initNav() {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        if (!btn || !menu) return;

        const icon = btn.querySelector('svg');
        const close = () => {
            menu.classList.add('hidden');
            if (icon) icon.classList.remove('rotate-90');
        };

        btn.onclick = (e) => {
            e.stopPropagation();
            menu.classList.toggle('hidden');
            if (icon) icon.classList.toggle('rotate-90', !menu.classList.contains('hidden'));
        };

        document.onclick = (e) => {
            if (!menu.classList.contains('hidden') && !menu.contains(e.target) && !btn.contains(e.target)) {
                close();
            }
        };

        document.onkeydown = (e) => {
            if (e.key === 'Escape') close();
        };

        document.addEventListener('turbo:before-visit', close);

        menu.addEventListener('click', (e) => {
            if (e.target.closest('a')) close();
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initNav);
    } else {
        initNav();
    }

    document.addEventListener('turbo:load', initNav);
</script>
