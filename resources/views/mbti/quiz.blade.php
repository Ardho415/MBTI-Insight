<x-app-layout>
    <div class="min-h-screen py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">MBTI Personality Test</h1>
                <p class="text-lg text-gray-600">Jawab semua pertanyaan dengan jujur untuk mendapatkan hasil yang akurat</p>
            </div>

            <!-- Progress Bar -->
            <div class="mb-8">
                <div class="bg-gray-200 rounded-full h-3">
                    <div id="progress-bar" class="bg-gradient-to-r from-purple-600 to-blue-600 h-3 rounded-full transition-all duration-300" style="width: 0%"></div>
                </div>
                <div class="flex justify-between mt-2 text-sm text-gray-600">
                    <span>Progress</span>
                    <span id="progress-text">0 / {{ count($questions) }}</span>
                </div>
            </div>

            <!-- Quiz Form -->
            <form method="POST" action="{{ route('mbti.store') }}" id="quiz-form">
                @csrf
                <div class="space-y-8">
                    @foreach($questions as $index => $question)
                        <div class="question-card bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg {{ $index > 0 ? 'hidden' : '' }}" data-question="{{ $index }}">
                            <div class="mb-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm font-medium text-purple-600 bg-purple-100 px-3 py-1 rounded-full">
                                        Pertanyaan {{ $index + 1 }}
                                    </span>
                                    <span class="text-sm text-gray-500">{{ $question->dimension }}</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 leading-relaxed">
                                    {{ $question->question }}
                                </h3>
                            </div>

                            <div class="space-y-4">
                                <label class="flex items-center p-4 bg-gray-50 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors group">
                                    <input type="radio" name="answers[{{ $question->id }}]" value="A" class="sr-only answer-input" data-question="{{ $index }}">
                                    <div class="w-5 h-5 border-2 border-gray-300 rounded-full mr-4 flex items-center justify-center group-hover:border-purple-500 transition-colors">
                                        <div class="w-3 h-3 bg-purple-600 rounded-full hidden radio-dot"></div>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-gray-900 transition-colors">{{ $question->option_a }}</span>
                                </label>

                                <label class="flex items-center p-4 bg-gray-50 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors group">
                                    <input type="radio" name="answers[{{ $question->id }}]" value="B" class="sr-only answer-input" data-question="{{ $index }}">
                                    <div class="w-5 h-5 border-2 border-gray-300 rounded-full mr-4 flex items-center justify-center group-hover:border-purple-500 transition-colors">
                                        <div class="w-3 h-3 bg-purple-600 rounded-full hidden radio-dot"></div>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-gray-900 transition-colors">{{ $question->option_b }}</span>
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-8">
                    <button type="button" id="prev-btn" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-xl hover:bg-gray-400 transition-colors disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Sebelumnya
                    </button>

                    <button type="button" id="next-btn" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-xl hover:from-purple-700 hover:to-blue-700 transition-all disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                        Selanjutnya
                        <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>

                    <button type="submit" id="submit-btn" class="px-8 py-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all hidden">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Selesai & Lihat Hasil
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let currentQuestion = 0;
        const totalQuestions = {{ count($questions) }};
        const answers = {};

        // Handle radio button selection
        document.querySelectorAll('.answer-input').forEach(input => {
            input.addEventListener('change', function() {
                const questionIndex = parseInt(this.dataset.question);
                const questionId = this.name.match(/\[(\d+)\]/)[1];
                
                // Update visual state
                const label = this.closest('label');
                const questionCard = label.closest('.question-card');
                
                // Reset all radio buttons in this question
                questionCard.querySelectorAll('.radio-dot').forEach(dot => dot.classList.add('hidden'));
                questionCard.querySelectorAll('label').forEach(l => l.classList.remove('bg-purple-100', 'border-purple-300'));
                
                // Show selected radio button
                label.querySelector('.radio-dot').classList.remove('hidden');
                label.classList.add('bg-purple-100', 'border-purple-300');
                
                // Store answer
                answers[questionId] = this.value;
                
                // Update progress
                updateProgress();
                
                // Enable next button
                document.getElementById('next-btn').disabled = false;
                
                // Auto advance after short delay
                setTimeout(() => {
                    if (currentQuestion < totalQuestions - 1) {
                        nextQuestion();
                    } else {
                        showSubmitButton();
                    }
                }, 500);
            });
        });

        // Navigation functions
        function nextQuestion() {
            if (currentQuestion < totalQuestions - 1) {
                document.querySelector(`[data-question="${currentQuestion}"]`).classList.add('hidden');
                currentQuestion++;
                document.querySelector(`[data-question="${currentQuestion}"]`).classList.remove('hidden');
                
                updateButtons();
                updateProgress();
            }
        }

        function prevQuestion() {
            if (currentQuestion > 0) {
                document.querySelector(`[data-question="${currentQuestion}"]`).classList.add('hidden');
                currentQuestion--;
                document.querySelector(`[data-question="${currentQuestion}"]`).classList.remove('hidden');
                
                updateButtons();
                updateProgress();
            }
        }

        function updateButtons() {
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');
            
            prevBtn.disabled = currentQuestion === 0;
            
            if (currentQuestion === totalQuestions - 1) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                submitBtn.classList.add('hidden');
                
                // Check if current question is answered
                const currentQuestionCard = document.querySelector(`[data-question="${currentQuestion}"]`);
                const isAnswered = currentQuestionCard.querySelector('input[type="radio"]:checked');
                nextBtn.disabled = !isAnswered;
            }
        }

        function updateProgress() {
            const answeredCount = Object.keys(answers).length;
            const progressPercent = (answeredCount / totalQuestions) * 100;
            
            document.getElementById('progress-bar').style.width = progressPercent + '%';
            document.getElementById('progress-text').textContent = `${answeredCount} / ${totalQuestions}`;
        }

        function showSubmitButton() {
            document.getElementById('next-btn').classList.add('hidden');
            document.getElementById('submit-btn').classList.remove('hidden');
        }

        // Event listeners
        document.getElementById('next-btn').addEventListener('click', nextQuestion);
        document.getElementById('prev-btn').addEventListener('click', prevQuestion);

        // Initialize
        updateButtons();
        updateProgress();
    </script>
</x-app-layout>

