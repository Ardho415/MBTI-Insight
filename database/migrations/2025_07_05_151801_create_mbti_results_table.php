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
        Schema::create('mbti_results', function (Blueprint $table) {
            $table->id();
            $table->string('type', 4)->unique();
            $table->string('name');
            $table->text('description');
            $table->text('strengths');
            $table->text('weaknesses');
            $table->text('career_suggestions');
            $table->text('relationships');
            $table->string('color', 7)->default('#6366f1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_results');
    }
};

