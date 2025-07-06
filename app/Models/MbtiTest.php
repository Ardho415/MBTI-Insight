<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MbtiTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'session_id',
        'answers',
        'result_type',
        'score_e',
        'score_i',
        'score_s',
        'score_n',
        'score_t',
        'score_f',
        'score_j',
        'score_p',
    ];

    protected $casts = [
        'answers' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function result(): BelongsTo
    {
        return $this->belongsTo(MbtiResult::class, 'result_type', 'type');
    }

    public function calculateResult(array $answers): string
    {
        $scores = [
            'E' => 0, 'I' => 0,
            'S' => 0, 'N' => 0,
            'T' => 0, 'F' => 0,
            'J' => 0, 'P' => 0,
        ];

        foreach ($answers as $questionId => $answer) {
            $question = MbtiQuestion::find($questionId);
            if ($question) {
                if ($answer === 'A') {
                    $scores[$question->type_a]++;
                } else {
                    $scores[$question->type_b]++;
                }
            }
        }

        $this->score_e = $scores['E'];
        $this->score_i = $scores['I'];
        $this->score_s = $scores['S'];
        $this->score_n = $scores['N'];
        $this->score_t = $scores['T'];
        $this->score_f = $scores['F'];
        $this->score_j = $scores['J'];
        $this->score_p = $scores['P'];

        $result = '';
        $result .= $scores['E'] > $scores['I'] ? 'E' : 'I';
        $result .= $scores['S'] > $scores['N'] ? 'S' : 'N';
        $result .= $scores['T'] > $scores['F'] ? 'T' : 'F';
        $result .= $scores['J'] > $scores['P'] ? 'J' : 'P';

        return $result;
    }
}

