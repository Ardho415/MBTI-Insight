<x-app-layout>
    <div class="min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">16 Tipe Kepribadian MBTI</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Eksplorasi semua 16 tipe kepribadian Myers-Briggs dengan deskripsi detail dan karakteristik unik masing-masing
                </p>
            </div>

            <!-- Personality Categories -->
            <div class="space-y-12">
                <!-- Analysts -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Analysts</h2>
                            <p class="text-gray-600">Pemikir rasional yang menyukai sistem dan inovasi</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($types->where('type', 'LIKE', 'NT%') as $type)
                            <a href="{{ route('mbti.type', strtolower($type->type)) }}" class="group">
                                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-transparent hover:border-purple-200">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background-color: {{ $type->color }}20; border: 2px solid {{ $type->color }}">
                                            <span class="font-bold text-lg" style="color: {{ $type->color }}">{{ $type->type }}</span>
                                        </div>
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-purple-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors">{{ $type->name }}</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ Str::limit($type->description, 100) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Diplomats -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Diplomats</h2>
                            <p class="text-gray-600">Idealis yang empatik dan kreatif</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($types->where('type', 'LIKE', 'NF%') as $type)
                            <a href="{{ route('mbti.type', strtolower($type->type)) }}" class="group">
                                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-transparent hover:border-green-200">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background-color: {{ $type->color }}20; border: 2px solid {{ $type->color }}">
                                            <span class="font-bold text-lg" style="color: {{ $type->color }}">{{ $type->type }}</span>
                                        </div>
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">{{ $type->name }}</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ Str::limit($type->description, 100) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Sentinels -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Sentinels</h2>
                            <p class="text-gray-600">Praktis dan fokus pada stabilitas</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($types->where('type', 'LIKE', 'S%J') as $type)
                            <a href="{{ route('mbti.type', strtolower($type->type)) }}" class="group">
                                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-transparent hover:border-blue-200">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background-color: {{ $type->color }}20; border: 2px solid {{ $type->color }}">
                                            <span class="font-bold text-lg" style="color: {{ $type->color }}">{{ $type->type }}</span>
                                        </div>
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ $type->name }}</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ Str::limit($type->description, 100) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Explorers -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Explorers</h2>
                            <p class="text-gray-600">Spontan dan fleksibel dalam menghadapi tantangan</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($types->where('type', 'LIKE', 'S%P') as $type)
                            <a href="{{ route('mbti.type', strtolower($type->type)) }}" class="group">
                                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-transparent hover:border-orange-200">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background-color: {{ $type->color }}20; border: 2px solid {{ $type->color }}">
                                            <span class="font-bold text-lg" style="color: {{ $type->color }}">{{ $type->type }}</span>
                                        </div>
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors">{{ $type->name }}</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ Str::limit($type->description, 100) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mt-16">
                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl p-8 text-white">
                    <h2 class="text-3xl font-bold mb-4">Belum Tahu Tipe Kepribadian Anda?</h2>
                    <p class="text-xl mb-6 opacity-90">Ikuti tes MBTI kami untuk menemukan tipe kepribadian Anda</p>
                    <a href="{{ route('mbti.create') }}" class="inline-flex items-center px-8 py-4 bg-white text-purple-600 font-semibold rounded-xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Mulai Tes Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

