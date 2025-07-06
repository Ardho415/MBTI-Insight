<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mbti_questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('dimension', 2); // EI, SN, TF, JP
            $table->string('option_a');
            $table->string('option_b');
            $table->string('type_a', 1); // E, I, S, N, T, F, J, P
            $table->string('type_b', 1); // E, I, S, N, T, F, J, P
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_questions');
    }
};

