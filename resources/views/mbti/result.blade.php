<x-app-layout>
    <div class="min-h-screen py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full mb-6" style="background-color: {{ $test->result->color }}20; border: 3px solid {{ $test->result->color }}">
                    <span class="text-2xl font-bold" style="color: {{ $test->result->color }}">{{ $test->result_type }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $test->result->name }}</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">{{ $test->result->description }}</p>
                <div class="mt-6 flex flex-wrap justify-center gap-4">
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">
                        Tes diambil: {{ $test->created_at->format('d M Y, H:i') }}
                    </span>
                    @if($test->user_id)
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                            Tersimpan di akun Anda
                        </span>
                    @endif
                </div>
            </div>

            <!-- Personality Scores -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Skor Kepribadian Anda</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Extraversion vs Introversion -->
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="text-3xl font-bold mb-2" style="color: {{ $test->score_e > $test->score_i ? '#ef4444' : '#3b82f6' }}">
                                {{ $test->score_e > $test->score_i ? 'E' : 'I' }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $test->score_e > $test->score_i ? 'Extraversion' : 'Introversion' }}
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-gradient-to-r from-red-500 to-blue-500 h-3 rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>E: {{ $test->score_e }}</span>
                            <span>I: {{ $test->score_i }}</span>
                        </div>
                    </div>

                    <!-- Sensing vs Intuition -->
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="text-3xl font-bold mb-2" style="color: {{ $test->score_s > $test->score_n ? '#f59e0b' : '#8b5cf6' }}">
                                {{ $test->score_s > $test->score_n ? 'S' : 'N' }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $test->score_s > $test->score_n ? 'Sensing' : 'Intuition' }}
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-gradient-to-r from-yellow-500 to-purple-500 h-3 rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>S: {{ $test->score_s }}</span>
                            <span>N: {{ $test->score_n }}</span>
                        </div>
                    </div>

                    <!-- Thinking vs Feeling -->
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="text-3xl font-bold mb-2" style="color: {{ $test->score_t > $test->score_f ? '#10b981' : '#ec4899' }}">
                                {{ $test->score_t > $test->score_f ? 'T' : 'F' }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $test->score_t > $test->score_f ? 'Thinking' : 'Feeling' }}
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-gradient-to-r from-green-500 to-pink-500 h-3 rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>T: {{ $test->score_t }}</span>
                            <span>F: {{ $test->score_f }}</span>
                        </div>
                    </div>

                    <!-- Judging vs Perceiving -->
                    <div class="text-center">
                        <div class="mb-4">
                            <div class="text-3xl font-bold mb-2" style="color: {{ $test->score_j > $test->score_p ? '#06b6d4' : '#f97316' }}">
                                {{ $test->score_j > $test->score_p ? 'J' : 'P' }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $test->score_j > $test->score_p ? 'Judging' : 'Perceiving' }}
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-gradient-to-r from-cyan-500 to-orange-500 h-3 rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>J: {{ $test->score_j }}</span>
                            <span>P: {{ $test->score_p }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Strengths -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Kekuatan</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach($test->result->strengths_array as $strength)
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-700">{{ $strength }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Weaknesses -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Area Pengembangan</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach($test->result->weaknesses_array as $weakness)
                            <li class="flex items-start">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <span class="text-gray-700">{{ $weakness }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Career Suggestions -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg mt-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Saran Karir</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
                    @foreach($test->result->career_suggestions_array as $career)
                        <div class="bg-blue-50 text-blue-700 px-4 py-2 rounded-lg text-center text-sm font-medium">
                            {{ $career }}
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Relationships -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg mt-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Hubungan & Komunikasi</h3>
                </div>
                <p class="text-gray-700 leading-relaxed">{{ $test->result->relationships }}</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-12">
                <a href="{{ route('mbti.create') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Tes Ulang
                </a>
                
                <a href="{{ route('mbti.types') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transform hover:scale-105 transition-all duration-200 shadow-lg border border-gray-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Lihat Semua Tipe
                </a>

                @auth
                    <a href="{{ route('mbti.history') }}" class="inline-flex items-center justify-center px-8 py-4 bg-green-600 text-white font-semibold rounded-xl hover:bg-green-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Riwayat Tes
                    </a>
                @endauth

                @if($test->user_id === auth()->id() || (!auth()->check() && $test->session_id === session()->getId()))
                    <form method="POST" action="{{ route('mbti.destroy', $test->id) }}" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus hasil tes ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center justify-center px-8 py-4 bg-red-600 text-white font-semibold rounded-xl hover:bg-red-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Hapus Hasil
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

