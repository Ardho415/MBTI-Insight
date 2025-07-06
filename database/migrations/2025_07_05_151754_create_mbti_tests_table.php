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
        Schema::create('mbti_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('session_id')->nullable();
            $table->json('answers');
            $table->string('result_type', 4);
            $table->integer('score_e')->default(0);
            $table->integer('score_i')->default(0);
            $table->integer('score_s')->default(0);
            $table->integer('score_n')->default(0);
            $table->integer('score_t')->default(0);
            $table->integer('score_f')->default(0);
            $table->integer('score_j')->default(0);
            $table->integer('score_p')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_tests');
    }
};

