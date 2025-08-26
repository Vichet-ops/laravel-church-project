<x-layout title="Home">
                    <!-- Full Screen Hero Section -->
                <div class="relative min-h-screen flex items-center justify-center pt-28 md:pt-16" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/images/church.jpg') no-repeat center center; background-size: cover;">
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Welcome to <span class="text-gray-300 text-5xl md:text-8xl">Muang Thai Korat Church</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-2 max-w-3xl mx-auto leading-relaxed">
                Join us in worship, fellowship, and growing together in faith.
            </p>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                Experience the love of Christ in our community.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('services') }}" class="bg-gray-700 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-800 transition duration-300 transform hover:scale-105">
                    Join Our Services
                </a>
                <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-gray-900 transition duration-300 transform hover:scale-105">
                    Learn More
                </a>
            </div>
        </div>
        
    </div>

    <!-- Space between sections -->
    <div class="h-8 bg-gray-300"></div>

    <!-- Welcome Section -->
    <section class="py-20 relative" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/children_ministry.jpg') no-repeat center center; background-size: cover;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Welcome to Our <span class="text-gray-300">Faith Community</span>
                </h2>
                <p class="text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed mb-16">
                    Join us in worship, fellowship, and growing together in faith. Experience the love of Christ in our welcoming community where everyone belongs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="text-center p-8 rounded-lg bg-gray-300 transition-all duration-1000 ease-out" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Bible Study</h3>
                    <p class="text-gray-600">Deepen your understanding of God's Word through our engaging Bible study programs for all ages.</p>
                </div>
                
                <div class="text-center p-8 rounded-lg bg-gray-300 transition-all duration-1000 ease-out" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Community</h3>
                    <p class="text-gray-600">Build meaningful relationships in our supportive community where faith and friendship come together.</p>
                </div>
                
                <div class="text-center p-8 rounded-lg bg-gray-300 transition-all duration-1000 ease-out" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Worship</h3>
                    <p class="text-gray-600">Experience inspiring worship services that uplift your spirit and draw you closer to God.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Times Section -->
    <section class="py-20 bg-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Join Us for <span class="text-gray-700">Worship</span>
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        We welcome you to join us for our weekly services. Come as you are and experience the love of Christ in our community.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold text-lg">S</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900">Sunday Service</h4>
                                <p class="text-gray-600">10:00 AM - Main Worship Service</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold text-lg">W</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900">Wednesday Bible Study</h4>
                                <p class="text-gray-600">7:00 PM - Adult Bible Study</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold text-lg">Y</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900">Youth Ministry</h4>
                                <p class="text-gray-600">Friday 6:30 PM - Youth Group</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-blue-600 rounded-2xl p-8 text-white">
                        <h3 class="text-3xl font-bold mb-6">Plan Your Visit</h3>
                        <p class="text-xl mb-8">We'd love to meet you! Here's what you can expect:</p>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-4 h-4 bg-white bg-opacity-20 rounded flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                    </svg>
                                </div>
                                <p>Casual, welcoming atmosphere</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-4 h-4 bg-white bg-opacity-20 rounded flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                                    </svg>
                                </div>
                                <p>Contemporary and traditional worship</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-4 h-4 bg-white bg-opacity-20 rounded flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H17c-.8 0-1.54.37-2.01 1l-1.7 2.26V9c0-.55-.45-1-1-1s-1 .45-1 1v6c0 .55.45 1 1 1h1v7h2v-7h1c.55 0 1-.45 1-1s-.45-1-1-1h-1v-1.5l1.7-2.26c.47-.63 1.21-1 2.01-1h1.54c.66 0 1.23.42 1.46 1.04L20.5 16H18v6h2z"/>
                                    </svg>
                                </div>
                                <p>Children's ministry available</p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-4 h-4 bg-white bg-opacity-20 rounded flex items-center justify-center mr-3 mt-1">
                                    <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                    </svg>
                                </div>
                                <p>Free coffee and fellowship</p>
                            </div>
                        </div>
                        
                        <a href="https://maps.google.com/?q=Muang+Thai+Korat+Church" target="_blank" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold mt-8 hover:bg-gray-100 transition duration-300">
                            🗺️ Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Upcoming <span class="text-blue-600">Events</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Stay connected with our community through these exciting events and activities.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-1000 ease-out" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-blue-600 font-semibold mb-2">December 24, 2024</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Christmas Eve Service</h3>
                        <p class="text-gray-600 mb-4">Join us for a special candlelight service celebrating the birth of Jesus Christ.</p>
                        <a href="{{ route('events') }}" class="text-blue-600 font-semibold hover:text-blue-700 transition duration-300">
                            Learn More →
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-1000 ease-out" data-aos="slide-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-green-600 font-semibold mb-2">Every Sunday</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Community Potluck</h3>
                        <p class="text-gray-600 mb-4">Share a meal and fellowship with our church family after Sunday service.</p>
                        <a href="{{ route('events') }}" class="text-green-600 font-semibold hover:text-green-700 transition duration-300">
                            Learn More →
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-1000 ease-out" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-purple-600 font-semibold mb-2">January 15, 2025</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Bible Study Series</h3>
                        <p class="text-gray-600 mb-4">Join our new Bible study series exploring the Book of Romans.</p>
                        <a href="{{ route('events') }}" class="text-purple-600 font-semibold hover:text-purple-700 transition duration-300">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('events') }}" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    View All Events
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to Join Our <span class="text-blue-200">Community?</span>
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                We'd love to welcome you to our church family. Come experience the love of Christ in our community.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    Contact Us
                </a>
                <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-fade-in class
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.animate-fade-in');
            animatedElements.forEach(el => observer.observe(el));
        });
    </script>
</x-layout>
