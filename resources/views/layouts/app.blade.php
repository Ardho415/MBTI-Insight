<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MBTI Insight') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white/80 backdrop-blur-sm shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-gray-900 text-white py-12 mt-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="text-lg font-semibold mb-4">MBTI Insight</h3>
                            <p class="text-gray-300">Temukan kepribadian sejati Anda melalui tes Myers-Briggs Type Indicator yang komprehensif dan akurat.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                            <ul class="space-y-2 text-gray-300">
                                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                                <li><a href="{{ route('mbti.create') }}" class="hover:text-white transition-colors">Take Test</a></li>
                                <li><a href="{{ route('mbti.types') }}" class="hover:text-white transition-colors">MBTI Types</a></li>
                                @auth
                                <li><a href="{{ route('mbti.history') }}" class="hover:text-white transition-colors">My History</a></li>
                                @endauth
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Contact</h3>
                            <p class="text-gray-300">Built with Laravel & Tailwind CSS</p>
                            <p class="text-gray-300 mt-2">© {{ date('Y') }} MBTI Insight. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Success/Error Messages -->
        @if(session('success'))
            <div id="success-message" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform transition-all duration-300">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => {
                    document.getElementById('success-message').style.transform = 'translateX(100%)';
                    setTimeout(() => {
                        document.getElementById('success-message').remove();
                    }, 300);
                }, 3000);
            </script>
        @endif

        @if(session('error'))
            <div id="error-message" class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform transition-all duration-300">
                {{ session('error') }}
            </div>
            <script>
                setTimeout(() => {
                    document.getElementById('error-message').style.transform = 'translateX(100%)';
                    setTimeout(() => {
                        document.getElementById('error-message').remove();
                    }, 300);
                }, 3000);
            </script>
        @endif
    </body>
</html>

