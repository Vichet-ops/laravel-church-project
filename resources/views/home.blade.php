<x-layout title="Home">
    <!-- Full Screen Hero Section -->
    <div class="relative min-h-screen flex items-center justify-center" style="background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('/images/chilli.jpg') no-repeat center center; background-size: cover;">
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Welcome to <span class="text-blue-300">Grace Brethren Church</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed">
                Join us in worship, fellowship, and growing together in faith. Experience the love of Christ in our community.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('services') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                    Join Our Services
                </a>
                <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-gray-900 transition duration-300 transform hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
        
    </div>
</x-layout>
