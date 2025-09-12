<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Church Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center mb-4">
                    <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition duration-300">
                        <img src="{{ asset('images/cross-logo.png') }}" alt="Muang Thai Korat Church Logo" class="h-12 w-auto mr-3">
                        <h3 class="text-lg font-semibold text-white">Muang Thai Korat Church</h3>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition duration-300">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition duration-300">Services</a></li>
                    <li><a href="{{ route('events') }}" class="text-gray-300 hover:text-white transition duration-300">Events</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition duration-300">Contact</a></li>
                    <li><a href="{{ route('give') }}" class="text-gray-300 hover:text-white transition duration-300">Give</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4">Contact Info</h4>
                <div class="space-y-2 text-gray-300">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <span>123 Church Street<br>City, State 12345</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <span>info@gracebrethren.com</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span>(555) 123-4567</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-center">
            <p class="text-gray-400">
                © {{ date('Y') }} Muang Thai Korat Church. All rights reserved.
            </p>
        </div>
    </div>
</footer>
