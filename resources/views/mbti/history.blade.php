<x-app-layout>
    <div class="min-h-screen py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Riwayat Tes MBTI Anda</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Lihat semua hasil tes kepribadian MBTI yang pernah Anda lakukan.
                </p>
            </div>

            @if($tests->isEmpty())
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg text-center">
                    <p class="text-gray-700 text-lg mb-4">Anda belum memiliki riwayat tes. Yuk, mulai tes pertama Anda!</p>
                    <a href="{{ route("mbti.create") }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Mulai Tes Sekarang
                    </a>
                </div>
            @else
                <div class="space-y-6">
                    @foreach($tests as $test)
                        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg flex flex-col md:flex-row items-center justify-between">
                            <div class="flex items-center mb-4 md:mb-0">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mr-4" style="background-color: {{ $test->result->color }}20; border: 2px solid {{ $test->result->color }}">
                                    <span class="text-xl font-bold" style="color: {{ $test->result->color }}">{{ $test->result_type }}</span>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">{{ $test->result->name }}</h2>
                                    <p class="text-gray-600 text-sm">Tes pada: {{ $test->created_at->format("d M Y, H:i") }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="{{ route("mbti.show", $test->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Lihat Hasil
                                </a>
                                <a href="{{ route("mbti.edit", $test->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600 transition-colors text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z"></path>
                                    </svg>
                                    Edit Tes
                                </a>
                                <form method="POST" action="{{ route("mbti.destroy", $test->id) }}" onsubmit="return confirm("Apakah Anda yakin ingin menghapus hasil tes ini?")">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition-colors text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $tests->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

