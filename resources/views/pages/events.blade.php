<x-layout title="Events">
    <!-- Hero Section -->
    <div class="relative h-64 md:h-80 lg:h-96 flex items-center justify-center pt-48 pb-20 md:pb-12">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Church Events</h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-6xl mx-auto">
                Stay connected with our community through these upcoming events and activities.
            </p>
        </div>
    </div>

    <!-- Event Categories Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Event Categories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover different types of events and activities happening in our church community.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Worship Events -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Worship Events</h3>
                    <p class="text-gray-600">Special worship services, concerts, and spiritual gatherings.</p>
                </div>

                <!-- Community Outreach -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Community Outreach</h3>
                    <p class="text-gray-600">Service projects, food drives, and community support activities.</p>
                </div>

                <!-- Bible Study & Education -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bible Study & Education</h3>
                    <p class="text-gray-600">Bible studies, seminars, and educational programs.</p>
                </div>

                <!-- Fellowship & Social -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fellowship & Social</h3>
                    <p class="text-gray-600">Social gatherings, potlucks, and fellowship events.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Upcoming Events</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Mark your calendar for these special events and activities.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Christmas Celebration -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Special Event</span>
                            <span class="text-gray-500 text-sm">Dec 24, 2024</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Christmas Celebration</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600"><strong>Time:</strong> 7:00 PM</p>
                            <p class="text-gray-600"><strong>Location:</strong> Main Sanctuary</p>
                        </div>
                        <p class="text-gray-600 mb-4">Join us for a special Christmas Eve service featuring carols, candlelight, and the Christmas story. A beautiful evening of worship and celebration.</p>
                        <button class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition duration-300">
                            Learn More
                        </button>
                    </div>
                </div>

                <!-- New Year's Prayer Service -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Prayer Service</span>
                            <span class="text-gray-500 text-sm">Jan 1, 2025</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">New Year's Prayer Service</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600"><strong>Time:</strong> 10:00 AM</p>
                            <p class="text-gray-600"><strong>Location:</strong> Main Sanctuary</p>
                        </div>
                        <p class="text-gray-600 mb-4">Start the new year with prayer, reflection, and thanksgiving. Join us for a special service to dedicate the year ahead to God.</p>
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Learn More
                        </button>
                    </div>
                </div>

                <!-- Easter Sunday Service -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Easter</span>
                            <span class="text-gray-500 text-sm">Apr 20, 2025</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Easter Sunday Service</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600"><strong>Time:</strong> 10:00 AM</p>
                            <p class="text-gray-600"><strong>Location:</strong> Main Sanctuary</p>
                        </div>
                        <p class="text-gray-600 mb-4">Celebrate the resurrection of Jesus Christ with our special Easter service. Join us for worship, celebration, and fellowship.</p>
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Learn More
                        </button>
                    </div>
                </div>

                <!-- Church Picnic -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Fellowship</span>
                            <span class="text-gray-500 text-sm">May 15, 2025</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Annual Church Picnic</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600"><strong>Time:</strong> 12:00 PM - 4:00 PM</p>
                            <p class="text-gray-600"><strong>Location:</strong> City Park</p>
                        </div>
                        <p class="text-gray-600 mb-4">Join us for our annual church picnic! Food, games, fellowship, and fun for the whole family. Bring a dish to share!</p>
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recurring Events Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Regular Events</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Join us for these ongoing events and activities throughout the year.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sunday Service -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Sunday Service</h3>
                    <div class="text-center space-y-3">
                        <p class="text-2xl font-bold text-blue-600">10:00 AM</p>
                        <p class="text-gray-600">Main Sanctuary</p>
                        <p class="text-sm text-gray-500">Weekly Worship Service</p>
                    </div>
                </div>

                <!-- Bible Study -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Bible Study</h3>
                    <div class="text-center space-y-3">
                        <p class="text-2xl font-bold text-purple-600">7:00 PM</p>
                        <p class="text-gray-600">Fellowship Hall</p>
                        <p class="text-sm text-gray-500">Every Tuesday</p>
                    </div>
                </div>

                <!-- Prayer Meeting -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Prayer Meeting</h3>
                    <div class="text-center space-y-3">
                        <p class="text-2xl font-bold text-green-600">7:00 PM</p>
                        <p class="text-gray-600">Prayer Room</p>
                        <p class="text-sm text-gray-500">Every Wednesday</p>
                    </div>
                </div>

                <!-- Youth Group -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Youth Group</h3>
                    <div class="text-center space-y-3">
                        <p class="text-2xl font-bold text-orange-600">6:30 PM</p>
                        <p class="text-gray-600">Youth Center</p>
                        <p class="text-sm text-gray-500">Every Friday</p>
                    </div>
                </div>

                <!-- Community Outreach -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Community Outreach</h3>
                    <div class="text-center space-y-3">
                        <p class="text-2xl font-bold text-red-600">9:00 AM</p>
                        <p class="text-gray-600">Various Locations</p>
                        <p class="text-sm text-gray-500">Every Saturday</p>
                    </div>
                </div>

                <!-- Women's Ministry -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-pink-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Women's Ministry</h3>
                    <div class="text-center space-y-3">
                        <p class="text-2xl font-bold text-pink-600">6:30 PM</p>
                        <p class="text-gray-600">Women's Ministry Room</p>
                        <p class="text-sm text-gray-500">First Thursday Monthly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-b from-[#0b1f3a] to-[#1b2f58]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Join Us at Our Events</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                We'd love to see you at our events! Connect with our community and grow in faith together.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                    Get More Information
                </a>
                <a href="{{ route('services') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300 transform hover:scale-105">
                    View Our Services
                </a>
            </div>
        </div>
    </section>
</x-layout>
