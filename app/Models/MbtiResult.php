<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MbtiResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'description',
        'strengths',
        'weaknesses',
        'career_suggestions',
        'relationships',
        'color',
    ];

    public function tests(): HasMany
    {
        return $this->hasMany(MbtiTest::class, 'result_type', 'type');
    }

    public function getStrengthsArrayAttribute()
    {
        return explode('|', $this->strengths);
    }

    public function getWeaknessesArrayAttribute()
    {
        return explode('|', $this->weaknesses);
    }

    public function getCareerSuggestionsArrayAttribute()
    {
        return explode('|', $this->career_suggestions);
    }
}

